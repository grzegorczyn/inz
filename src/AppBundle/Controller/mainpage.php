<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 25.11.2018
 * Time: 19:42
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class mainpage extends Controller
{
    /**
     * @Route("/",name="mainpage")
     */

    public function addAction(Request $request)
    {

        return $this->render('default/mainpage.html.twig');
    }
}