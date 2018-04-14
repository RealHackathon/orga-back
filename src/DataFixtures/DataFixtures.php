<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 14/04/2018
 * Time: 04:00
 */

namespace App\DataFixtures;


use App\Entity\Quote;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DataFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $data = [
            'Hooligans' => [
                'Ce n’est pas de savoir que tu soutiens tes amis qui compte, c’est d’avoir le soutien de tes amis...',
                'Pete Dunham m’a appris qu’il fallait faire face. Je n’aurai jamais l’opportunité de le remercier, Mais je vivrai de façon a l’honorer.',
                'Moi je fais des petites bulles
Des belles bulles que j’crache en l’air
Elles sont si belles, volent jusqu’au ciel
Comme dans mes rêves, à la fin, elles crèvent
Ou se cache donc la chance, ça me met en transe
Moi je fais des petites bulles
Des belles bulles que je crache en l’air
UNITED !!
UNITED !!
UNITED !!'
            ]
        ];
        foreach ($data as $movie => $citations) {
            foreach ($citations as $citation) {
                $quote = new Quote();
                $quote
                    ->setMovie($movie)
                    ->setText($citation);
                $manager->persist($quote);
            }
        }
        $manager->flush();
    }
}