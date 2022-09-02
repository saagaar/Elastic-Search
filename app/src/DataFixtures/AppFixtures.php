<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;


class AppFixtures extends Fixture
{
	private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
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
    }
}
