<?php

namespace sportogether\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use sportogether\Bundle\Entity\RencontrePublic;
use sportogether\Bundle\Form\RencontrePublicType;
use Symfony\Component\HttpFoundation\Request;

class MembresController extends Controller
{

  /**
 * Lists all Dons entities.
 *
 * @Route("membres/show/", name="liste_membres")
 * @Method("GET")
 */
 public function indexAction()
{
  $em = $this->getDoctrine()->getManager();
  $user = $em->getRepository('sportogetherBundle:User')->findAll();


    return $this->render('accueil.html.twig', array(
      'user' => $user,
    ));

}
}
