<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use App\Entity\Tags;
use App\Entity\Providers;


class AppFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $hasher){
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail("admin@gmail.com");
        $user->setRoles(["ROLE_ADMIN"]);
        $password = $this->hasher->hashPassword($user, '123456');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

         $user = new User();
        $user->setEmail("test@gmail.com");
        $user->setRoles(["ROLE_USER"]);
        $password = $this->hasher->hashPassword($user, '123456');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

        $tags=['github','php','golang','rust','react','facebook','elastic search','kafka','phpstrom','Ruby','Vue.js','Java','Python','Mysql','Symfony','css','AWS','RabbitMQ','google','desygner','Artificial','Machine Learning','Docker','Server','Apache','Nginx'];

            foreach($tags as $eachtag){
                $tag = new Tags();
                $tag->setTagName($eachtag);
                $manager->persist($tag);
            }
            $manager->flush();
            $manager->clear();

         $providers=['iStock.com','Flickr','Instagram','Freepicks','PinInterest','PixaBay','Desygner','Shutterfly','ShutterStock','Flickr','Webshots','Tinypic','Ovi Share','Photo Bucket','Drinestagram','Unsplash','Fotopic.net','Pixorial','Phanfare','Tinypic'];
        foreach($providers as $eachProvider){
            $provider = new Providers();
            $provider->setProviderName($eachProvider);
            $manager->persist($provider);
         }
            $manager->flush();
   }
}
