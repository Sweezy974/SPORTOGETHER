<?php

namespace sportogether\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use sportogether\Bundle\Entity\RencontrePublic;
use sportogether\Bundle\Form\RencontrePublicType;
use Symfony\Component\HttpFoundation\Request;

class RencontrePublicController extends Controller
{
  /**
  * Creates a new rencontrePublic entity.
  *
  * @Route("/new/RencontrePublic", name="RencontrePublic_new")
  * @Method({"GET", "POST"})
  */
  public function newAction(Request $request)
  {
    $rencontrePublic = new RencontrePublic();
    $form = $this->createForm('sportogether\Bundle\Form\RencontrePublicType', $rencontrePublic);
    $form->handleRequest($request);
    $userId = $this->getUser();
    $userId->getId();
    $rencontrePublic->setUser($userId);
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($rencontrePublic);
      $em->flush();
      return $this->redirectToRoute('accueil');
    }
    return $this->render('rencontrePublic-new.html.twig', array(
      'rencontrePublic' => $rencontrePublic,
      'form' => $form->createView(),
    ));
  }
  /**
 * Lists all Dons entities.
 *
 * @Route("/show/RencontrePublic", name="RencontrePublic_show")
 * @Method("GET")
 */
 public function indexAction()
{
  $em = $this->getDoctrine()->getManager();
  $rencontrePublic = $em->getRepository('sportogetherBundle:RencontrePublic')->findAll();
  $user = $this->getUser();

    return $this->render('rencontrePublic-show.html.twig', array(
      'rencontrePublic' => $rencontrePublic,
    ));

}



}
