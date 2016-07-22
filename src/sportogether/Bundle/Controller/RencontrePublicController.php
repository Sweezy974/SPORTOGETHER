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
  * @Route("RencontrePublic/rencontre/new/", name="RencontrePublic_new")
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
      return $this->redirectToRoute('RencontrePublic_show');
    }
    return $this->render('rencontrePublic-new.html.twig', array(
      'rencontrePublic' => $rencontrePublic,
      'form' => $form->createView(),
    ));
  }
  /**
  * Lists all Dons entities.
  *
  * @Route("RencontrePublic/rencontre/show/", name="RencontrePublic_show")
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

  /**
  * voir un groupe de rencontre.
  *
  * @Route("RencontrePublic/rencontre/{id}/details", name="sportogether_details-rencontre")
  * @Method("GET")
  */
  public function voirRencontreAction($id)

  {

    $em = $this->getDoctrine()->getManager();
    $rencontrePublic = $em->getRepository('sportogetherBundle:RencontrePublic')->findOneById($id);

    return $this->render('rencontrePublic-detail.html.twig',
    array("rencontrePublic"=>$rencontrePublic));
  }



  /**
  * Rejoindre un groupe de rencontre.
  *
  * @Route("RencontrePublic/rencontre/{id}/join", name="sportogether_join-rencontre")
  * @Method("GET")
  */
public function joinAction(RencontrePublic $rencontrePublic)
 {
   $userId = $this->getUser();
   $userId->getId();
   $rencontrePublic->addMembre($userId);
   $em = $this->getDoctrine()->getManager();
   $em->persist($rencontrePublic);
   $em->flush();


   return $this->render('rencontrePublic-confirm.html.twig',
   array("rencontrePublic"=>$rencontrePublic));
 }



}
