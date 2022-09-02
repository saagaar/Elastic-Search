<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Entity\Images;
use App\Form\ImageUploadType;
class ImageController extends AbstractController
{
    #[Route('/upload/manual/', name: 'image_upload_manual')]
    public function uploadManual(Request $request): Response
    {
    	
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $image=new Images();
        $form=$this->createForm(ImageUploadType::class,$image);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $newImage=$form->getData();
            dd($newImage);exit;
        }
               

        return $this->render('admin/image/upload-manual.html.twig', [
            'controller_name' => 'ImageController',
            'type'=>'manual',
            'tags'=>[],
            'uploadImage' => $form->createView(),
        ]);
    }

    //Uploads Images Using URL

    #[Route('/upload/url', name: 'image_upload_url')]
    public function uploadImageByUrl(Request $request): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $image=new Images();
        $form=$this->createForm(ImageUploadType::class,$image);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $newImage=$form->getData();
        }
        return $this->render('admin/image/upload-by-url.html.twig', [
            'controller_name' => 'ImageController',
            'type'=>'url',
            'uploadImage' => $form->createView(),
        ]);
    }
}
