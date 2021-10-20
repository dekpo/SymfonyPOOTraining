<?php
namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController{
    /**
     * @Route("hello/{param}", requirements={"param"="\d+"})
     */
    function helloDecim($param){
        
        // return new Response("hello");
        // return $this->render("base.html.twig");
        // return $this->redirectToRoute("/another");
        // throw $this->createNotFoundException();
        $salutation = "Mr Robot n°" . $param;
        $array = ['Pierre','Paul','Jacques'];
        return $this->render("base.html.twig",['title'=>$salutation,'list'=>$array]);
    }
    /**
     * @Route("hello/{user}", name="helloName")
     */
    function helloName($user){
        
        // return new Response("hello");
        // return $this->render("base.html.twig");
        // return $this->redirectToRoute("/another");
        // throw $this->createNotFoundException();
        $salutation = "Hello " . $user;
        $array = ['Pierre','Paul','Jacques'];
        return $this->render("helloParam.html.twig",['title'=>$salutation,'list'=>$array]);
    }
    /**
     * @Route("hello")
     */
    function hello(){
        
        // return new Response("hello");
        // return $this->render("base.html.twig");
        // return $this->redirectToRoute("/another");
        // throw $this->createNotFoundException();
        $salutation = "Salut !";
        $array = ['Pierre','Paul','Jacques'];
        return $this->render("base.html.twig",['title'=>$salutation,'list'=>$array]);
    }
    /**
     * @Route("listing")
     */
    function listing(){
        return new Response("Listing here !");
        // return $this->render("base.html.twig");
        // return $this->redirectToRoute("/another");
        // throw $this->createNotFoundException();
    }
    /**
     * @Route("page")
     */

    function page(Request $request){
        // return new Response("Page here !");
        // return $this->render("base.html.twig");
        // return $this->redirectToRoute("/another");
        // throw $this->createNotFoundException();
        $params = $request->query->all();
        var_dump($params);
        die;
    }

}
