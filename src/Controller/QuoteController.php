<?php
/**
 * Created by PhpStorm.
 * User: isabelle
 * Date: 14/04/18
 * Time: 00:35
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuoteController extends Controller
{
    /**
     * @Route(path="/quote/{request}", name="sendQuote")
     * @Method("GET")
     */
    public function findQuote($request)
    {
        //Creer service RequestTreatment avec param $request --> retourne un theme

        $em = $this->getDoctrine()->getManager();
        $quote = $em->getRepository(Quote::class)->findRandomQuote($theme);

        $serializer = new SerializerManager();
        $json = $serializer->get()->serialize($quote, 'json', array('enable_max_depth' => true));
        return new JsonResponse($json, 200, [], true);
    }

}