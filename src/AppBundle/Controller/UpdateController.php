<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 12.12.2018
 * Time: 00:19
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Customer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class UpdateController extends Controller
{
    /**
     * @Route("/update/{id}", name="update")
     *
     */
    public function UpdateAction(Request $request, Customer $customer)
    {
        $form = $this ->createForm(CustomerEditForm::class, $customer);
        $form ->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $customer = $form->getData();
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($customer);
            $manager->flush();

            $translator = $this->get('translator');
            $this->addFlash('powiodło się', $translator->trans('customer.update.success'));

            return $this->redirectToRoute('customers');
        }

        return [
            'form' => $form->createView(),
            'customer' => $customer,
        ];
    }

}