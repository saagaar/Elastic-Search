<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Images;

class ProvidersFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
    	$providers=['iStock.com','Flickr','Instagram','Freepicks','PinInterest','PixaBay','Desygner','Shutterfly','ShutterStock','Flickr','Webshots','Tinypic','Ovi Share','Photo Bucket','Drinestagram','Unsplash','Fotopic.net','Pixorial','Phanfare','Tinypic'];
    	$tags=['github','php','golang','rust','react','facebook','elastic search','kafka','phpstrom','Ruby','Vue.js','Java','Python','Mysql','Symfony','css','AWS','RabbitMQ','google','desygner','Artificial','Machine Learning','Docker','Server','Apache','Nginx'];

        // $providers = new Images();
        foreach(glob('/public/images/*') as $file) {
			print_r($file);exit;
		}

        // $manager->persist($product);

        $manager->flush();
    }
}
