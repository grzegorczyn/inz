<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 28.11.2018
 * Time: 23:04
 */

namespace AppBundle\Form;

use AppBundle\Entity\Customer;
use AppBundle\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imie', TextType::class)
            ->add('nazwisko', TextType::class)
           ->add('nazwa_firmy', TextType::class)
            ->add('nip', TextType::class)

            ->add('contact', CollectionType::class,[
                'entry_type' => ContactType::class,
                'entry_options'=>[
                    'label' => false],
                'by_reference'=> false,
                'allow_add' =>true,
                'allow_delete' => true
                ])

            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Customer::class
        ]);
    }

}