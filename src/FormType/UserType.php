<?php

namespace FormType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * Description of UserType
 *
 * @author Etudiant
 */
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options     )
    {
        global $app;
        $builder->add('username', TextType::class,[
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 2, 'max' => 50]),
                new \Constraints\UniqueEnity([
                    'field' => 'username',
                    'dao' => $app['users.dao']
                ])
            ]
        ])
        ->add('email', EmailType::class, [
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Email(),
                new \Constraints\UniqueEnity([
                    'field' => 'email',
                    'dao' => $app['users.dao']
                ])
            ]
        ])
        ->add('lastname', TextType::class,[
            'constraints' =>[
                new Assert\NotBlank(),
                new Assert\Length(['max' => 100]),
            ]
        ])
        ->add('firstname', TextType::class,[
            'constraints' =>[
                new Assert\NotBlank(),
                new Assert\Length(['max' => 100]),
            ]
        ])
        ->add('password', PasswordType::class, [
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Length(['min' => 5, 'max' => 30]),
            ]
        ])
        ->add('passwordconfirm', PasswordType::class, [
            'constraints' => [
                new Assert\IdenticalTo(['value' => 'password'])
            ]
        ])
        ->add('submit', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => \Entity\User::class 
        ]);
    }
}
