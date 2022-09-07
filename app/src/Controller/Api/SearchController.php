<?php
namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ImagesRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ApiPlatform\Core\Annotation\ApiResource;
use FOS\ElasticaBundle\Manager\RepositoryManager;
use FOS\ElasticaBundle\Repository;


#[ApiResource]
class SearchController extends AbstractController 
{

	protected $container;
	private $serializer;
  
    #[Route('/api/search/', name: 'app_api_search_api')]
    public function index(ImagesRepository	 $images,Request $request): JsonResponse
    {
    	$data=$images->elasticSearchQuery($request);
		return $this->json(
            ['status'=>true,'message'=>'Data Fetched Successfully','data'=>$data],
            headers: ['Content-Type' => 'application/json;charset=UTF-8']
        );	
		
    }
}
