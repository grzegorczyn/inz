<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 11.12.2018
 * Time: 23:00
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customer;

class ShowController extends Controller
{
    /**
    * @Route("/show", name="show")
    */
    public function showAction(Request $request)
    {
        $customerdets = $this->getDoctrine()
            ->getRepository('AppBundle:Customer')
            ->findAll();

        return $this->render('default/show.html.twig', array('viewCustomerdets' => $customerdets));
    }


}

