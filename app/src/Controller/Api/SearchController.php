<?php

namespace App\Controller\Api;

use App\Repository\ImagesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ApiPlatform\Core\Annotation\ApiResource;
use FOS\ElasticaBundle\Repository;
use FOS\RestBundle\Controller\AbstractFOSRestController;


class SearchController extends AbstractFOSRestController
{

	protected $container;
	private $serializer;
   
    #[Route('/api/search/', name: 'app_api_search_api')]
    public function search(ImagesRepository	 $images,Request $request)
    {
        try{
            $data=$images->elasticSearchQuery($request);
            $response=['status'=>true,'message'=>'Data Fetched Successfully','data'=>$data];
            $view = $this->view($response, 200);
                        $view->setFormat('json');
            return $this->handleView($view);
        }
        catch(Exception $e){
            throw $e;
        }
    	
		
		
    }
}
