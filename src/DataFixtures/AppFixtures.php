<?php

namespace App\DataFixtures;

use App\Factory\CommentFactory;
use App\Factory\PostFactory;
use App\Factory\PostThemeFactory;
use App\Factory\TagFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        TagFactory::createSequence([
            ['tagName' => 'Symfony'],
            ['tagName' => 'PHP'],
            ['tagName' => 'JavaScript'],
            ['tagName' => 'Java'],
            ['tagName' => 'C#'],
            ['tagName' => 'Flutter'],
            ['tagName' => 'Android'],
            ['tagName' => 'Linux'],
            ['tagName' => 'MacOS'],
            ['tagName' => 'Hibernate'],
            ['tagName' => 'Windows'],
            ['tagName' => 'Spring'],
            ['tagName' => 'Docker'],
        ]);

        PostThemeFactory::createSequence([
            ['themeName' => 'Informatique'],
            ['themeName' => 'Société'],
            ['themeName' => 'Sport'],
            ['themeName' => 'Politique'],
            ['themeName' => 'International'],
        ]);

        UserFactory::createSequence([
            ['nickName' => 'Lulu Lemonade'],
            ['nickName' => 'Ninja Noodles'],
            ['nickName' => 'Poppy Rainbow'],
            ['nickName' => 'Bubbles O\'Laugh'],
            ['nickName' => 'Jelly bean'],
            ['nickName' => 'Pixel Pusher'],
            ['nickName' => 'Code Cruncher'],
            ['nickName' => 'Geek Guru'],
            ['nickName' => 'Night Owl'],
            ['nickName' => 'Linux Lover'],
            ['nickName' => 'Joystick Jester'],
            ['nickName' => 'Mouse Jostler'],
            ['nickName' => 'Salad Samuraï'],
            ['nickName' => 'Coffee Lover'],
            ['nickName' => 'Wee Lassie Gamer'],
            ['nickName' => 'Banjaxed eejit'],
        ]);

        PostFactory::createMany(100, [
            'tags' => TagFactory::randomRange(0,5),
        ]);

        CommentFactory::createMany(500);


    }
}
