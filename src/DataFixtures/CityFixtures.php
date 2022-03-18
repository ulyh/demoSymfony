<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $city = new City();
        $city->setName("Bratislava");
        $city->setPopulation(432000);
        $manager->persist($city);
        $city = new City();
        $city->setName("Budapest");
        $city->setPopulation(1759000);
        $manager->persist($city);
        $city = new City();
        $city->setName("Prague");
        $city->setPopulation(1280000);
        $manager->persist($city);
        $city = new City();
        $city->setName("Warsaw");
        $city->setPopulation(1748000);
        $manager->persist($city);
        $city = new City();
        $city->setName("Los Angeles");
        $city->setPopulation(3971000);
        $manager->persist($city);
        $city = new City();
        $city->setName("New York");
        $city->setPopulation(8550000);
        $manager->persist($city);
        $city = new City();
        $city->setName("Edinburgh");
        $city->setPopulation(464000);
        $manager->persist($city);
        $city = new City();
        $city->setName("Suzhou");
        $city->setPopulation(4327066);
        $manager->persist($city);
        $city = new City();
        $city->setName("Zhengzhou");
        $city->setPopulation(4122087);
        $manager->persist($city);
        $city = new City();
        $city->setName("Berlin");
        $city->setPopulation(3671000);
        $manager->persist($city);

        $manager->flush();
    }
}
