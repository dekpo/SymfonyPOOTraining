<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController{
    /**
     * @Route("/user")
     */
    
    function createUserForm(Request $request){
        $user = new User();

        $form = $this->createFormBuilder($user)
        ->add('name', TextType::class)
        ->add('email', EmailType::class)
        ->add('date', DateType::class,['widget'=>'single_text'])
        ->add('save', SubmitType::class)
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            return new Response("Merci d'avoir renseigné le formulaire");
        }

        return $this->render('form.html.twig',['userForm'=>$form->createView()]);
    }
}