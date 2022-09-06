<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Repository\ProvidersRepository;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ImagesRepository;
use App\Entity\Images;
class HomeController extends AbstractController
{
    #[Route('/', name: 'frontend_home')]
    public function index(ProvidersRepository $provider): Response
    {
        $allProviders=$provider->findAllProviders();
        return $this->render('frontend/home/index.html.twig', [
            'controller_name' => 'HomeController',
            'providersData'=>$allProviders
        ]);
    }
     #[Route('api/bookmark/',methods:['GET'], name: 'bookmark_image')]
    public function bookmarkImage(Request $request,ImagesRepository $images,EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $image=$request->get('image_id');
        try{
            if(!$image) throw new Exception("Image Not Selected!", 1);
            $imageObj=$images->find($image);
            $user=$this->getUser();
            if($user->getImages()->contains($imageObj)){
               $user->removeImage($imageObj);
               $message='Bookmark Removed Successfully';
            }
            else{
               $user->addImage($imageObj);
                $message='Bookmark Added Successfully';
            }
            $em->persist($user);
            $em->flush();
            return $this->json(['status'=>true,'message'=>$message], headers: ['Content-Type' => 'application/json;charset=UTF-8']);
        }
        catch(Exception $e){
             return $this->json(['status'=>false,'message'=>$e->getMessage()]);
        }
    }
    #[Route('/user/library',methods:['GET'], name: 'user_library')]
    public function userLibrary(Request $request,ImagesRepository $images,EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        try{
            $allLibrary=$this->getUser()->getImages();
            $lib=[];
            if($allLibrary){
              foreach($allLibrary as $eachLibrary){
                $lib[]=['image_id'=>$eachLibrary->getId(),'image_name'=>$eachLibrary->getImageName(),'provider_id'=>$eachLibrary->getProvider()->getId()];
               }      
            }
            return $this->render('frontend/home/library.html.twig', [
                'controller_name' => 'HomeController',
                'libraries'=>$lib,
             ]);
            
        }
        catch(Exception $e){
             return $this->json(['status'=>false,'message'=>$e->getMessage()]);
        }
    }
    public function resizeImage($code,$width,$name){
        $imagePath=public_path(). '/uploads/blog/'.$code.'/'.$name;
        if(File::exists($imagePath))
        {
           $img = Image::make($imagePath);
          $img->resize($width, null, function ($constraint) {
                $constraint->aspectRatio();
            });
          return $img->response('jpg'); 
        }
        abort(404);
    }
}
