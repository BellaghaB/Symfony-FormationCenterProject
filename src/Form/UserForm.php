<?php

namespace App\Form;


use phpDocumentor\Reflection\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;

class UserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('password', PasswordType::class)
                ->add('phonenumber', TextType::class)
                ->add('email', EmailType::class)
                ->add('adress',TextType::class)
                ->add('role', TextType::class);
    }
    public function getName(){
        return"User";
    }
}