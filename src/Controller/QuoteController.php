<?php
/**
 * Created by PhpStorm.
 * User: isabelle
 * Date: 14/04/18
 * Time: 00:35
 */

namespace App\Controller;

use App\Entity\Game;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/quote/go", name="quote_")
 */
class QuoteController extends Controller
{
    /**
     * @Route("/{id}", name="go")
     */
    public function goAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $game = $em->getRepository(Game::class)->find($id);
        $users = $em->getRepository(User::class)->findBy(['game' => $game]);
        $count0 = 0;
        $count1 = 0;
        $count2 = 0;
        foreach ($users as $user) {
            if ($user->getRound() === '0') {
                $count0++;
            } elseif ($user->getRound() === '1') {
                $count1++;
            } else {
                $count2++;
            }
        }
        if ($count0 === 0 or $count1 === 0) {
            return new JsonResponse('ok', 200);
        } else if ($count2 > 0) {
            return new JsonResponse('done', 200);
        }
        return new JsonResponse('ko', 200);
    }
}