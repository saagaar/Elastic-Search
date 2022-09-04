<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Tags;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use FOS\ElasticaBundle\Manager\RepositoryManager;
use FOS\ElasticaBundle\Repository;
use FOS\ElasticaBundle\Finder\PaginatedFinderInterface;
use FOS\ElasticaBundle\Manager\RepositoryManagerInterface;

#[ApiResource]
class SearchController extends AbstractController
{

	protected $container;
    public function __construct(RepositoryManagerInterface $manager)
    {
        $this->container = new ContainerBuilder();
        $this->manager=$manager;
    }


    #[Route('/api/search/', name: 'app_api_search_api')]
    public function index(Request $request): JsonResponse
    {
    	// $finder = $this->container->get('fos_elastica.manager.finder');
    	 $finder=$this->manager->getRepository(Tags::class);
    	$tag=$request->get('tag');
    	$boolQuery = new \Elastica\Query\BoolQuery();
    	$provider=$request->get('provider');
    	$tagQuery = new \Elastica\Query\HasChild('tag_name',$tag);
		$providerQuery = new \Elastica\Query\MatchQuery('provider_name',$provider);
		if($tag)
			$boolQuery->addMust($tagQuery);
		if($provider){
			$boolQuery->addFilter($providerQuery);
		}
		$data = $finder->find($boolQuery);
		dd($data);
    }
}
