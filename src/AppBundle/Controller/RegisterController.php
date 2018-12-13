<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Contact;
use AppBundle\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class RegisterController extends Controller
{
    /**
     * @Route("/register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function registerAction(Request $request)
    {
        #$contact=$this->getDoctrine()->getManager();
        $customer = new Customer();

        $contact = new Contact();

        $customer->addContact($contact);

        $form = $this->createForm(CustomerType::class, $customer);


        $form->handleRequest($request);

        if ($form->isSubmitted()){
           dump($customer);
        }


        return $this->render('default/register2.html.twig',[
            'form' => $form->createView()
    ]);
    }

}
