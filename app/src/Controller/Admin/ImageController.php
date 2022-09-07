<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Config\Definition\Exception\Exception;
use App\Entity\Images;
use App\Form\ImageUploadType;
use App\Form\ImageExtractType;
use App\Services\ImageOptimizer;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Liip\ImagineBundle\Imagine\Data\DataManager;
use Liip\ImagineBundle\Imagine\Filter\FilterManager;

class ImageController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em){
        $this->em=$em;
    }

    //Upload image by file upload
    #[Route('/upload/manual/', name: 'image_upload_manual')]
    public function uploadManual(Request $request,CacheManager $cache,DataManager $data,FilterManager $filter): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $image=new Images();
        $form=$this->createForm(ImageUploadType::class,$image);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $newImage=$form->getData();
             $providerId= ($newImage->getProvider()->getId());
                $dir=$this->getParameter('kernel.project_dir').'/public/uploads/images/'.$providerId.'/';
                if(!is_dir($dir)){
                    mkdir($dir,0777,true);
                }
                $image=$form->get('image_attachment')->getData();
                if($image){
                     $newFileName=uniqid().'-'.time().'.'.$image->guessExtension();
                     $originalImageDir=$dir.'original/';
                  
                     try{
                        $image->move($originalImageDir,$newFileName);
                        $imageService=new ImageOptimizer();
                        $thumbnail=$imageService->resize($dir,$originalImageDir,$newFileName);
                     }
                     catch(FileException $e){
                       $this->addFlash('error',$e->getMessage());
                       return $this->redirectToRoute('image_upload_manual');
                     }
                }
                $newImage->setImageName($newFileName);
                $this->em->persist($newImage);
                $this->em->flush();
                $this->addFlash('success', 'File Uploaded Successfully');
                 return $this->redirectToRoute('image_upload_manual');
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
        $form=$this->createForm(ImageExtractType::class,$image);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $newImage=$form->getData();
            try{
                $dir=$this->getParameter('kernel.project_dir').'/public/uploads/images/';
                if(!is_dir($dir)){
                    mkdir($dir,0777,true);
                }
                $imageUrl=$form->get('image_url')->getData();
                $extension = pathinfo(parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION);
                $newFileName=uniqid().'-'.time().'.'.$extension;
                 
                $allExt=["jpg", "jpeg", "png", "gif", "ico"];
                if(!in_array($extension, $allExt)) throw new Exception("Invalid URL!!", 1);
                file_put_contents($dir.$newFileName,file_get_contents($imageUrl));

            }
            catch(Exception $e){
              $this->addFlash('error',$e->getMessage());
               return $this->redirectToRoute('image_upload_url');
            }
            catch(FileException $e){
                $this->addFlash('error',$e->getMessage());
               return $this->redirectToRoute('image_upload_url');
            }
            $newImage->setImageName($newFileName);
            $this->em->persist($newImage);
            $this->em->flush();
            $this->addFlash('success', 'File Uploaded Successfully');
            return $this->redirectToRoute('image_upload_url');
        }
        return $this->render('admin/image/upload-by-url.html.twig', [
            'controller_name' => 'ImageController',
            'type'=>'url',
            'uploadImage' => $form->createView(),
        ]);
    }
}
