<?php

namespace sportogether\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/" , name="accueil")
     */
     public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $user = $em->getRepository('sportogetherBundle:User')->findAll();


        return $this->render('liste-membre.html.twig', array(
          'user' => $user,
        ));

    }
}
