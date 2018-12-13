<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 11.12.2018
 * Time: 23:51
 */

namespace AppBundle\Controller;




use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ShowOneController extends Controller
{
    /**
     * @Route("/showone", name="showone")
     */
    public function ShowOneAction(Request $request)
    {

        return $this->render('default/showone.html.twig');
    }

}