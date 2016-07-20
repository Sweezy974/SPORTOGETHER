<?php

namespace messengerBundle\Controller;

use messengerBundle\Entity\message;
use sportogether\Bundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
    * @Route("/messages/{recepteur}",name="messenger_messages")
    * @Method({"POST", "GET"})
    */
    public function sendMessageAction(Request $request,$recepteur=null)
    {
        //envoyer message
        $message = new message();
        $emetteur = $this ->getUser();
        $message->setDate(new \DateTime());
        $form = $this->createFormBuilder($message)
        ->add('message',TextType::Class)
        ->add('envoyer',SubmitType::Class)

        ->getForm();
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('sportogetherBundle:User')->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $recepteur = $em->getRepository('sportogetherBundle:User')->findOneById($recepteur);
            $message->setEmetteur($emetteur)->setRecepteur($recepteur);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            // afficher message
            $message = $em->getRepository('messengerBundle:message')->findAll();
        }
        return $this->render('messengerBundle:Default:chat.html.twig', array(

            'form' => $form->createView(),
            'message' => $message,
            'users'=>$users
        ));


    }


}
