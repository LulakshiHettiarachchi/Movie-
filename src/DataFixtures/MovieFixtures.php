<?php

namespace App\DataFixtures;
use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('sample description');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2020/05/15/16/42/batman-5174224_960_720.jpg');
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers');
        $movie2->setReleaseYear(2020);
        $movie2->setDescription('sample description2');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2022/06/05/11/06/action-figures-7243788_960_720.jpg');       
        $manager->persist($movie2);
        $manager->flush();

    }
}
