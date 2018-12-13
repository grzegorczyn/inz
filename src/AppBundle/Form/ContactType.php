<?php
/**
 * Created by PhpStorm.
 * User: Natalia
 * Date: 10.12.2018
 * Time: 22:33
 */

namespace AppBundle\Form;


use AppBundle\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('telefon_stacjonarny', TextType::class)
            ->add('telefon_komorkowy', TextType::class)
            ->add('adres_email', TextType::class);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=>Contact::class
        ]);
    }

}