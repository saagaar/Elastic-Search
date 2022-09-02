<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ImageController extends AbstractController
{
   
    #[Route('/upload/manual/', name: 'image_upload_manual')]
    public function uploadManual(): Response
    {
    	
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $form=$this->createFormBuilder([])
                ->add('image_url',TextType::class)
                ->add('tags', CollectionType::class)
                ->add('provider', TextType::class)
                ->add('save', SubmitType::class, ['label' => 'Create Task']);

        return $this->render('admin/image/upload-manual.html.twig', [
            'controller_name' => 'ImageController',
            'type'=>'manual',
            'tags'=>[],
        ]);
    }

    //Uploads Images Using URL

    #[Route('/upload/url', name: 'image_upload_url')]
    public function uploadImageByUrl(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('admin/image/upload-by-url.html.twig', [
            'controller_name' => 'ImageController',
            'type'=>'url'
        ]);
    }
}
