<?php
/**
 * Created by PhpStorm.
 * User: esaliya
 * Date: 5/7/17
 * Time: 11:31 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{genusName}")
     */
    public function showAction($genusName)
    {
        /*$templating = $this->container->get('templating');
        $html = $templating->render('genus/show.html.twig', ['name'=>$genusName]);
        return new Response($html);*/

        // Altnerative to the above the following works too
        /*return $this->render('genus/show.html.twig', ['name'=>$genusName]);*/

//        $notes = [
//            'Octopus asked me a riddle, outsmarted me',
//            'I counted 8 legs... as they wrapped around me',
//            'Inked!'
//        ];

        return $this->render('genus/show.html.twig', [
            'name'=> $genusName,
//            'notes' => $notes
        ]);

    }

    /**
     * @Route("genus/{genusName}/notes", name="genus_show_notes")
     * @Method("GET")
     */
    public function getNotesAction($genusName)
    {
        $notes = [
            ['id' => 1, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Octopus asked me a riddle, outsmarted me', 'date' => 'Dec. 10, 2015'],
            ['id' => 2, 'username' => 'AquaWeaver', 'avatarUri' => '/images/ryan.jpeg', 'note' => 'I counted 8 legs... as they wrapped around me', 'date' => 'Dec. 1, 2015'],
            ['id' => 3, 'username' => 'AquaPelham', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Inked!', 'date' => 'Aug. 20, 2015'],
        ];
        $data = [
            'notes' => $notes
        ];

        return new JsonResponse($data);
    }

}