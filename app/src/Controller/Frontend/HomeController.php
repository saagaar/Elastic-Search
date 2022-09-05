<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProvidersRepository;

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
