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
            'Madagascar 2' => [
                '- L’avion ne sera réparé que quand la direction acceptera nos revendications : d’abord les congés maternité...- Les congés maternité ? Mais !... Vous êtes des mâles...'
            ],
            'Gran Torino' => [
                'Il vous est jamais arrivé de tomber sur un mec qui fallait pas faire chier ? C’est moi.'
            ],
            'Tais-toi !' => [
                '- Si je comprend bien le type le plus con de votre asile a réussi à enlever le type le plus dangereux, c’est pas un peu insolite, ça ? - Je suis psychiatre depuis 20 ans, alors moi, l’insolite...', 'Bonjour, je m’appelle Quentin. Je suis de Montargis.', '- Dites, vous pourriez pas m’en débarasser ?
- Euh... il est con ! C’est un asile de fous, pas un asile de cons. Il faudrait construire des asiles de cons, mais vous imaginez un peu la taille des bâtiments...', 'Je connaissais un type il s’appelait Michaut ou Michelet ou Michalot, un truc comme ça. Il était comme toi il avait toujours une grosse joue à gauche. Je me marrais et je lui disais « Tu ressembles à un cul mais t’as qu’une fesse ! ».
Il faisait du bruit en mangeant comme toi, une vraie pelleteuse le mec ! Et je lui disais « Hé la-qu’une-fesse ! Tu bouffes comme une pelleteuse ! ».'
            ],
            'Titanic' => [
                '- Et quand je marche dans la vallée je ne crains pas la mort...- Tu peux pas marcher plus vite dans ta putain de vallée !'
            ],
            'Les trois frères' => [
                'L’huisser : Dois-je vous signaler qu’un huissier est un agent assermenté par l’État, hein ? 
Didier : Ouais ben c’est pas incompatible avec un enculé c’est plutôt un pléonasme.
Pascal : Non mais ça lui a échappé.
L’huisser : Oui eh ben pas à moi alors je vais vous dire à chaque insulte vous serez gratifié d’une amende de 500 Francs.
Pascal : Attendez, sinon, il y a le téléviseur là...
Didier : Et s’il vous plaît ? La gifle c’est combien ?
Pascal : C’est un Thomson, il est bien, il est tout neuf...
L’huisser : Bon, 800, 800...
Bernard : Euh monsieur c’est une question j’voudrais savoir... Sac à merde c’est une insulte ? J’sais pas ’fin j’pose la question comme ça, c’est une insulte ?
L’huisser : Sac à merde... J’vous avais prévenu 500 Francs.
Didier : Nan nan vous pouvez mettre 3000 Francs parce que on va rajouter dans le sac à merde euh, vieux gros con pourri, d’enfoiré de merde au service du pouvoir qui me fait chier... 5000 parce que j’vais rajouter GROS CON DE TÊTE DE MERDE qui pu l’vomi de de...
Bernard : De raclure de bidet !'
            ],
            'Fight Club' => [
                'C’était de toute beauté. Nous revendions à des femmes riches la graisse qui provenait de leurs fesses.'
            ],
            'Camping' => [
                'Dis donc Sophie, j’espère que t’as pas pris un coup de soleil sur les fesses parce que ça va couter cher en Biafine s’il faut que t’étales !'
            ],
            'Les Bronzés' => [
                'J’ai vécu avec une femme. Et puis au bout de 48h elle a decidé qu’on se separerait d’un commun accord. J’ai fais une tentative de suicide : j’ai avalé 2 tubes de laxatifs. J’ai perdu 16 kilos et ma moquette.', '- Bonsoir, nous allons nous coucher !- Bonsoir, nous allons les niquer !', 'À un poil de cul près.'
            ],
            'Les bronzés font du ski' => [
                'Écoute Bernard... J’crois que toi et moi, on a un peu le même problème ; c’est qu’on peut pas vraiment tout miser sur notre physique, surtout toi. Alors si je peux me permettre de te donner un conseil, c’est oublies qu’t’as aucune chance, vas-y, fonce ! On sait jamais, sur un malentendu ça peut marcher...', 'Moi j’ai acheté cet appartement du 15 au 30, si tout le monde dépasse d’une demie journée qu’est ce qu’il se passe ? l’année prochaine je skie au moi de juillet !', '- Je sais pas ce qui me retient de te casser la gueule...
- La peur peut-être ?
- Ouais, ça doit être ça !', 'Quand te reverrais-je ? Pays merveilleux ! Où ceux qui s’aiment, vivent à deux !',
                'Je crois que toi et moi on a un peu le même problème, c’est-à-dire qu’on peut pas vraiment tout miser sur notre physique, surtout toi.', '- Excusez-moi mais vous êtes en train d’uriner sur ma voiture.
- Hein ? Ho, Ha oui ! ... Mais c’est parce que j’ai la même là bas, j’ai confondu ! ... Je peux finir ?
- Oui.', '- Bonjour, j’ai réservé une chambre.
- Oui, et vous vous appelez ?
- Jean-Claude, et vous ?
- ...
- Dus avec un D comme Dus...', '- Tu m’aides pas là ?- Non pas là non...', '- C’est quoi les petits trucs blanc ?
- Ça c’est les vers. bah oui comme ça y a la viande aussi...
- je suis végétarien.', 'Copain, c’est son nom. On l’a appelé copain comme cochon.', '- Je ne vous met pas mon point sur la gueule, je pense que ce n’est pas nécessaire ?- N...n...non.', 'Vous avez de la pâte ? Vous avez du sucre ? Avec la pâte, vous faites une crêpe et vous mettez du sucre dessus !', 'Je sens que je vais conclure.'
            ],
            'Le parrain' => [
                'Ne me raconte plus que tu es innocent parce que c’est une insulte à mon intelligence et ça me rend de mauvaise humeur.',
                'Mon père lui a fait une offre qu’il ne pouvait pas refuser.', 'Ce n’est pas personnel, c’est uniquement les affaires.'
            ],
            'Le Parrain, 2ème partie' => [
                'Gardez vos amis près de vous, mais gardez vos ennemis encore plus près.'
            ],
            'On a retrouvé la 7e compagnie' => [
                'Le fil vert sur le bouton vert, le fil rouge sur le bouton rouge.', 'Si je connaissais le con qu’a fait sauter le pont !'
            ],
            'Apocalypse Now' => [
                'J’aime l’odeur du napalm le matin.'
            ],
            'Star Wars : Episode 4 - Un nouvel espoir' => [
                'Que la Force soit avec toi...'
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