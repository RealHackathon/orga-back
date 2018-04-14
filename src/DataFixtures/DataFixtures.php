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
            ],
            'Le seigneur des anneaux : la communauté de l’anneau' => [
                'Un Anneau pour les gouverner tous, un Anneau pour les trouver. Un Anneau pour les amener tous et dans les ténèbres les lier.', 'Vous ne passerez pas !'
            ],
            'V pour Vendetta' => [
                'Il n’y a pas de certitudes, il n’y a que des opportunités.'
            ],
            'L’âge de glace 3 - Le temps des dinosaures' => [
                '- Quand est-ce que tu as perdu la tête ?- Il y a trois mois je me suis réveillé marié à côté d\'un ananas... hyper moche en plus.'
            ],
            'Bienvenue à Zombieland' => [
                '- Tu vas risquer nos vies pour un Twinkie ?
- Y’a une boîte de Twinkie dans ce supermarché. Pas n’importe quelle boîte de Twinkie. La dernière boîte de Twinkie que quiconque pourra savourer dans tout l’univers. Et crois le ou non mais les Twinkie ont une date de péremption ok ? Dans un avenir très rapproché, la vie de ce délicieux rondin de sucre sera terminée. Ok, alors maintenant courage ou dégage le p’tit.'
            ],
            'Pirates des Caraibes, la malédiction du Black Pearl' => [
                '- On va voler l’navire ? Ce navire ?- Réquisitionner. On « réquisitionne » ce « bâtiment », termes nautiques.',
                'Elle est saine et sauve, comme je te l’ai promis. Et elle est prête à épouser Norrington comme elle l’a promis ; et toi tu vas mourir pour elle, comme tu l’as promis... Nous sommes tous des hommes d’honneur, tu vois... exceptée Elizabeth qui est en fait, une femme.'
            ],
            'Alice au pays des merveilles' => [
                '- Suis-je devenu fou ? - Oui je pense Chapelier. Mais je vais te dire un secret : la plupart des gens bien le sont.'
            ],
            'Intouchables' => [
                '- Quelle tête elle a ? C’est peut-être un thon !- Ce n’est pas ça qui m’intéresse. Pour moi, ça passe d’abord par une relation d’esprit à esprit...- Ouais, ben, si ça se trouve, c’est une relation d’esprit à thon !',
                'Pas de bras, pas de chocolat.', '- Et la jupe elle est où là ?- Nan ça c’est des bas de contention, si je les mets pas je risque de m’évanouir...- Moi je vais pas vous mettre des bas !! Même pour vous vaut mieux vous évanouir franchement ! Un moment donné faut... on dit non !!'
            ],
            'The Avengers' => [
                '- Stark, nous avons besoin d’un plan d’attaque.- J’ai un plan... on attaque.'
            ],
            'RRRrrrr !!!' => [
                '- C’est quoi ton type de femme à toi ?- Vivante.', '- Très bien, on va faire l’appel.
[Voix off : nous sommes à l’âge de pierre]
- Pierre ?
- Présent.
- Pierre ?
- Présent.
- Pierre ?
- Présente.
- Pierre ?
- Présente.
- Ah, Pierre ?
- Présent.
- Pierre ? ... Pierre... Évidemment encore absent celui là. J’imagine que Pierre n’est pas là non plus ! Comme par hasard, toujours ensemble ces deux là.', 'Poussez-vous, excusez-moi ! Poussez-moi excusez-vous !', '- Ça va être tout noir !- Ta gueule !'
            ],
            'La vie est belle' => [
                'On commence le jeu, les retardataires sont éliminés ! Le premier qui obtient un total de 1000 points gagne un véritable char d’assaut. Sacrés veinards. Tous les jours le classement vous sera communiqué par ce haut parleurs là, et chaque jours la personne qui sera classée dernière devra porter la mention « Âne » sur un carton accroché dans le dos.
Nous on joue le rôle des très très méchants qui aboient sans arrêt et qui donnent des ordres en hurlant, ceux qui ont peur perdent des points. Dans trois cas on peut perdre le total des points acquis : premièrement, tous ceux qui se mettent à pleurer, deuxièmement, tous ceux qui demandent à voir leur maman, et tous ceux qui se plaignent d’avoir faim et qui demandent un goûter : aucun goûter !
Et on a vite fait de perdre des points parce qu’on a faim. Pas plus tard qu’hier, j’ai moi-même perdu 40 points parce que j’ai cassé les pieds à tout le monde pendant une heure pour avoir de la marmelade. À la confiture d’abricot. Lui à la fraise. Ah, euh toutes les sucettes sont interdites, c’est pas la peine d’en réclamer on en donne pas, on les mange toutes. Hier, j’en ai mangé une vingtaine. J’ai un de ces mal de ventre. Mais je me suis régalé.
Ça valait le coup. Excusez moi de vous fausser compagnie mais aujourd’hui on joue à cache-cache et si j’y vais pas, je vais m’faire engueuler.'
            ],
            'Inglorious Basterds' => [
                'Bien, je me présente : Lt . Aldo Raine. Et j’ai besoin de huit soldats. On va se pointer en France en tenue civile, on aura qu’un objectif à atteindre et un seul : tuer du nazi. Les membres du parti national socialiste ont conquis l’Europe par le meurtre, la torture, les menaces et la terreur. Nous allons leur rendre la monnaie de leur pièce, nous allons massacrer les soldats allemands. C’est par notre cruauté qu’ils vont nous connaître. Ils auront les preuves de notre cruauté quand ils trouveront les corps mutilés, démembrés, éventrés de leurs frères après notre passage ! Les allemands ne pourrons pas s’empêcher de penser à la barbarie, aux atrocités que nous leur infligerons ! Ils vont gouter à nos poings, aux talons de nos bottes, et aux fils de nos lames ! Les allemands auront la nausée ! Les allemands vont nous entendre arriver ! Les allemands seront terrorisés ! Les nazis n’ont aucune humanité ! Il faut les détruire ! Chaque soldat de mon commando devra me rapporter cent scalps ! Et j’entends avoir mes scalps.',
                '- C’est moi le meilleur en italien donc c’est moi ton cavalier, Donovitz c’est le deuxième meilleur se sera ton cameraman italien et Omar c’est le troisième meilleur il fera l’assistant de Doni.
- Mais je cause pas italien !
- Ouais c’est ce que je dit t’es le troisième meilleur. Il suffit que tu fermes ta gueule ! Je serais toi je m’entrainerais tout de suite...'
            ],
            'Le bon, la brute et le truand' => [
                '- Le monde se divise en deux mon ami, ceux qui ont la corde au cou et ceux qui la leur coupe... Oui seulement celui qu’a la corde cou c’est moi, moi je risque gros, c’est pourquoi la prochaine fois j’veux plus de la moitié !
- Mmhhh, oui tu as la corde au cou, mais moi je tire, et si tu me rogne mon pourcentage - cigare ? - qui sait, il peut arriver qu’je rate mon coup mmhh ?'
            ],
            'Shrek' => [
                'T’es pas mouru l’âne, t’es pas mouru.'
            ],
            'Very bad trip' => [
                'T’es littéralement trop con pour qu’on t’insulte !', '- Alors les mecs, prêts à lâcher les chiens ?- Quoi ?- Bah oui, comme dans la chanson : « Who let the dogs out ? ouh ouh ».- C’est qui qu’a amené ce mec ?', '
- C’était terrible quand j’ai perdu mon grand-père.
- Ah il est mort comment ?
- 2e Guerre Mondiale.
- Il est mort au combat ?
- Nan, il skiait dans le Vermont, c’était pendant la 2e Guerre Mondiale.'
            ],
            'Rasta rockett' => [
                '- Qu’est-ce que tu fumes Sanka man ?- Je fume pas, j’expire.', '- Sanka, t’es mort ?- Yeah man.'
            ],
            'La grande vadrouille' => [
                '- En tout cas, ils peuvent me tuer, je ne parlerai pas.
- Mais moi non plus ! Ils peuvent vous tuer, je ne parlerai pas !
- Ah, je savais qu’on pouvait compter sur vous.'
            ],
            'Forrest Gump' => [
                'Cours Forrest, cours !'
            ],
            'Une journée en enfer' => [
                '- Le plus rapide pour aller vers le sud c’est pas la neuvième, c’est par central parc.
- Seigneur... l’avenue du parc est toujours bouchée.
- Qui t’a dit que je prenais l’avenue. J’ai dit que je prenais par le parc.'
            ],
            'Brice de nice' => [
                'Moi le matin, je casse le vent, je fais chier les gens ça me purifie c’est important.'
            ],
            'Madagascar 2'
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