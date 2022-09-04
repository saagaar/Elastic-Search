<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Images;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use FOS\ElasticaBundle\Manager\RepositoryManager;
use FOS\ElasticaBundle\Repository;
use FOS\ElasticaBundle\Finder\PaginatedFinderInterface;
use FOS\ElasticaBundle\Manager\RepositoryManagerInterface;
use Pagerfanta\Adapter\FixedAdapter;
#[ApiResource]
class SearchController extends AbstractController
{

	protected $container;
	private $perPage=5	;
    public function __construct(RepositoryManagerInterface $manager)
    {
        $this->container = new ContainerBuilder();
        $this->manager=$manager;
    }

    #[Route('/api/search/', name: 'app_api_search_api')]
    public function index(Request $request): JsonResponse
    {
    	$finder=$this->manager->getRepository(Images::class);
    	$page=($request->get('page'))?$request->get('page'):1;
    	$tag=$request->get('tag');
    	$boolQuery = new \Elastica\Query\BoolQuery();
    	$provider=$request->get('provider');
    	$tagQuery = new \Elastica\Query\Fuzzy('tags.tag_name',$tag);
		$providerQuery = new \Elastica\Query\MatchQuery('provider.provider_name',$provider);
		if($tag){
			$boolQuery->addFilter($tagQuery);
		}
		if($provider){
			$boolQuery->addFilter($providerQuery);
		}
		$query = new \Elastica\Query();
		$query->setQuery($boolQuery);
		$query->setSize($this->perPage);
		$query->setFrom(($page - 1) * $this->perPage);
		$result = $finder->find($query);
		// dd($result);	
		foreach($result as $eachResult){
			print_r(($eachResult->getImage()));exit;
		// 	print_r({$eachResult}->getProperties());
		// 	// print_r($eachResult->gettags()->);exit;
		}
		exit;

		// $data[]= $this->serializer->deserialize($data, Images::class, 'json', ['object_to_populate' => $eachResult]); 
		// }

		// dd($data);exit;
		// echo $result->
		// return new JsonResponse($result,200, ["Content-Type" => "application/json"]);
    }
}
