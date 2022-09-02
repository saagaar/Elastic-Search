<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TagsRepository;
use App\Entity\Tags;
use Doctrine\Persistence\ManagerRegistry;

class TagController extends AbstractController
{
	
    #[Route('/frontend/tag', name: 'app_frontend_tag')]
    public function index(): Response
    {
        return $this->render('frontend/tag/index.html.twig', [
            'controller_name' => 'TagController',
        ]);
    }

    //Search Tag using search query =tag_name
    #[Route('/api/search-tags', name: 'api_tag')]
    public function searchTags(TagsRepository $tagsRepository,Request $request):JsonResponse
    {
    	$search=$request->get('search');
        $data=$tagsRepository->findByTagName($search);
        return $this->json($data,200);
    }
    #[Route('/api/create-tag',methods:['POST'], name: 'create_tag_api')]
     public function createTag(Request $request,ManagerRegistry $doctrine):JsonResponse
    {
        $name=$request->get('tag');
        $entityManager = $doctrine->getManager();
        $tag=new Tags();
        $tag->setTagName($name);
        $entityManager->persist($tag);
        $entityManager->flush();
        return $this->json(['status'=>true,'message'=>'Tag Created Successfully','id'=>$tag->getId(),'tag_name'=>$tag->getTagName()],200);
    }
}
