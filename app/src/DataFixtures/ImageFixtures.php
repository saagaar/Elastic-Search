<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Images;
use App\Entity\Tags;
use App\Entity\Providers;
use App\Services\ImageOptimizer;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Doctrine\Persistence\ManagerRegistry;

class ImageFixtures extends Fixture
{
	private $params;
	private $doctrine;
    public function __construct(ParameterBagInterface $params,ManagerRegistry $doctrine)
    {
        $this->params = $params;
        $this->doctrine=$doctrine;
    }
    public function load(ObjectManager $manager): void
    {
        $rootUrl=$this->params->get('kernel.project_dir' );
        $currentUrl=$rootUrl."/public/images/";
        $pictures = glob($currentUrl."*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        $em = $this->doctrine->getManager();

        //GET max id
         $tag= $em->createQueryBuilder()
            ->select('e')
            ->from('App:Tags', 'e')
            ->orderBy('e.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
             //GET min id
          $tagmi= $em->createQueryBuilder()
            ->select('e')
            ->from('App:Tags', 'e')
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
             //GET max id of provider
        $provid = $em->createQueryBuilder()
            ->select('e')
            ->from('App:Providers', 'e')
            ->orderBy('e.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
             //GET min id of provider
    	 $providmi = $em->createQueryBuilder()
	        ->select('e')
	        ->from('App:Providers', 'e')
	        ->orderBy('e.id', 'ASC')
	        ->setMaxResults(1)
	        ->getQuery()
	        ->getOneOrNullResult();
            $tagMax=($tag)?$tag->getId():0;
            $providerMax=($provid)?$provid->getId():0;
            
            $tagMin=($tagmi)?$tagmi->getId():0;
            $providerMin=($providmi)?$providmi->getId():0;
            if($tagMax >0 && $providerMax>0){
            foreach($pictures as $eachPic){
                $image=new Images();
                $tag1 = mt_rand($tagMin,$tagMax);
                $tag2 = mt_rand($tagMin,$tagMax);
                $prov1=mt_rand($providerMin,$providerMax);
                $image->addTag(
                    $em->getReference(Tags::class, $tag1)
                );
                $image->addTag(
                    $em->getReference(Tags::class, $tag2)
                );
                $image->setProvider(
                    $em->getReference(Providers::class, $prov1)
                );
                 $imageService=new ImageOptimizer();
                 $ext = pathinfo(parse_url($eachPic, PHP_URL_PATH),PATHINFO_EXTENSION);
                 $newFileName=uniqid().'-'.time().'.'.$ext;
                 
                 $providerPath=$rootUrl.'/public/uploads/images/'.$prov1.'/';
                 if(!is_dir($providerPath.'/original')){
                    mkdir($providerPath.'/original',0777,true);
                 }
                 $copyReturn=copy($eachPic, $providerPath.'/original/'.$newFileName);
                 // print_r($copyReturn);exit;
                 if($copyReturn){
                     $originalImageDir=$providerPath.'/original/';
                     $thumbnail=$imageService->resize($providerPath,$originalImageDir,$newFileName);
                     $image->setImageName($newFileName);
                     $em->persist($image);
                     $em->flush();
                 }
            }
        }
    }
}
