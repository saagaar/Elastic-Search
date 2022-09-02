<?php

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProvidersRepository;
use App\Entity\Providers;

class ProviderController extends AbstractController
{
    #[Route('/frontend/provider', name: 'app_frontend_provider')]
    public function index(): Response
    {
        return $this->render('frontend/provider/index.html.twig', [
            'controller_name' => 'ProviderController',
        ]);
    }
    #[Route('/api/search-providers', name: 'api_providers')]
    public function searchProviders(ProvidersRepository $providerRepo,Request $request):JsonResponse
    {
    	$search=$request->get('search');
        $data=$providerRepo->findByProviderName($search);
        return $this->json($data,200);
    }

    #[Route('/api/create-providers',methods:['POST'], name: 'create_provider_api')]
     public function createProvider(Request $request,ManagerRegistry $doctrine):JsonResponse
    {
        $name=$request->get('provider');
        $entityManager = $doctrine->getManager();
        $provider=new Providers();
        $provider->setProviderName($name);
        $entityManager->persist($provider);
        $entityManager->flush();
        return $this->json(['status'=>true,'message'=>'Provider Created Successfully','id'=>$provider->getId(),'provider_name'=>$provider->getProviderName()],200);
    }
}
