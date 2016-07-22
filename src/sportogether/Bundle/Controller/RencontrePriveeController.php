<?php

// namespace sportogether\Bundle\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
// use sportogether\Bundle\Entity\RencontrePrivee;
// use sportogether\Bundle\Form\RencontrePriveeType;
// use Symfony\Component\HttpFoundation\Request;

// class RencontrePublicController extends Controller
{
  /**
  * Creates a new RencontrePrivee.
  *
  * @Route("RencontrePrivee/new/", name="RencontrePrivee_new")
  * @Method({"GET", "POST"})
  */
  // public function newAction(Request $request)
  // {
  //   $rencontrePrivee = new RencontrePrivee();
  //   $form = $this->createForm('sportogether\Bundle\Form\RencontrePriveeType', $RencontrePrivee);
  //   $form->handleRequest($request);
  //
  //   $user = $this->getUser();
  //   $rencontrePrivee->setCreateur($user);
  //
  //   if ($form->isSubmitted() && $form->isValid()) {
  //     $em = $this->getDoctrine()->getManager();
  //     $em->persist($rencontrePrivee);
  //     $em->flush();
  //     return $this->redirectToRoute('RencontrePrivee_show');
  //   }
  //   return $this->render('rencontrePrivee-new.html.twig', array(
  //     'rencontrePrivee' => $rencontrePrivee,
  //     'form' => $form->createView(),
  //   ));
  // }

//   public function invitAction(Request $request)
// {
//   return $this->render('rencontrePrivee-new.html.twig');
// }
//

}
