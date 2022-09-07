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
use Pagerfanta\Adapter\FixedAdapter;
use Symfony\Component\Serializer\SerializerInterface;
use \Indaxia\OTR\Traits\Transformable;
// use Symfony\Component\Serializer\Serializer;


use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

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
