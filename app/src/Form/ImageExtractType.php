<?php

namespace App\Form;

use App\Entity\Tags;
use App\Entity\Images; 
use App\Entity\Providers;
use App\Repository\ProvidersRepository;
use App\Repository\TagsRepository;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\UrlType;



class ImageExtractType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('image_url',UrlType::class,[
               'required'=>true,
               'label'=>false,
               'mapped'=>false,
               'attr' => ['placeholder' => 'Enter Image URL','class' => 'form-control','id'=>'image_url'],
               'constraints' => [
                    new NotBlank([
                        'message' => 'Please Enter URL!',
                    ]),
                ],
            ])
            ->add('provider',EntityType::class,[
                'required'=>true,
                'label'=>false,
                'class'=>Providers::class,
                'choice_label' => 'provider_name',
                'placeholder' => 'Choose an option',
                'by_reference' => false,
                'attr' => ['class' => 'select2-single-tags form-control','id'=>'provider'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please Select  Item!',
                    ]),
                ],
            ])
            ->add('tags',EntityType::class,[
                'required'=>true,
                'multiple'=>true,
                'class'=>Tags::class,
                'label'=>false,
                'choice_label' => 'tag_name',
                'placeholder' => 'Choose an option',
                'by_reference' => false,
                'attr' => ['class' => 'js-example-basic-multiple form-control','id'=>'tags'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please Select At Least One Item!',
                    ]),
                ],
            ])


        ;
         $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) {
                $data = $event->getData();
                $form = $event->getForm();
                if(isset($data['provider']) and $data['provider']!=null){
                    $selected = $data['provider'];
                    $form->add('provider', EntityType::class, array(
                        'class' => Providers::class,
                        'choice_label' => 'provider_name',
                        'label' => 'Provider',
                        'attr' => ['class' => 'select2-single-tags form-control','id'=>'provider'],
                        'query_builder' => function (ProvidersRepository $er) use  ($selected){
                            return $er->createQueryBuilder('a')
                                ->where('a.id = :id')
                                ->setParameter('id', $selected);
                        },
                    ));
                }  
            }
        );

         $builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent $event) {
                $data = $event->getData();
                $form = $event->getForm();
                if(isset($data['tags']) and $data['tags']!=null){
                    $selected = $data['tags'];
                    $form->add('tags', EntityType::class, array(
                        'class' => Tags::class,
                        'choice_label' => 'tag_name',
                        'label' => 'Tag',
                        'multiple'=>true,
                        'attr' => ['class' => 'select2-single-tags form-control','id'=>'tags'],
                        'query_builder' => function (TagsRepository $er) use  ($selected){
                            return $er->createQueryBuilder('a')
                                ->where('a.id in (:id)')
                                ->setParameter('id', $selected);
                        },
                    ));
                }  
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Images::class,
        ]);
    }
}
