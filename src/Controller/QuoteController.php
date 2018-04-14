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
        $winner = $em->getRepository(User::class)->findOneBy(['game' => $game, 'round' => 1]);
        if ($winner === null) {
            return new JsonResponse('ok', 200);
        }
        return new JsonResponse($winner->getPseudo(), 200);
    }
}