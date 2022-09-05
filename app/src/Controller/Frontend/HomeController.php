<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/frontend/home', name: 'frontend_home')]
    public function index(): Response
    {
        return $this->render('frontend/home/index.html.twig', [
            'controller_name' => 'HomeController',
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
