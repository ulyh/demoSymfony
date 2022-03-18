<?php
//https://sharemycode.fr/icg
namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNom('BOUVANESVARY');
        $user->setPrenom('Soupramanien');
        $user->setDateInscription(new \DateTime());
        $user->setEmail('soupra@test.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordHasher->hashPassword($user, 'test'));
        $manager->persist($user);
        $user2 = new User();
        $user2->setNom('toto');
        $user2->setPrenom('titi');
        $user2->setDateInscription(new \DateTime("2020-12-24"));
        $user2->setEmail('toto@test.fr');
        $user2->setPassword($this->passwordHasher->hashPassword($user, 'test'));
        $manager->persist($user2);
        $manager->flush();
    }
}
