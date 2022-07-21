<?php

namespace App\Form;

use App\Entity\BusinessCard;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class BusinessCardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companie', TextType::class, [
                'label' => 'Enpreprise',
                'attr' => [
                    'class' => 'form-control'],
                ])
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'form-control'],
                ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control'],
                ])
            ->add('position', TextType::class, [
                'label' => 'Fonction',
                'attr' => [
                    'class' => 'form-control'],
                ])
            ->add('phoneNumber', TelType::class, [
                'label' => 'Téléphone',
                'attr' => [
                    'class' => 'form-control'],
                ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control'],
                ]) 
            ->add('website', UrlType::class, [
                'label' => 'Site internet',
                'attr' => [
                    'class' => 'form-control'],
                ])
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BusinessCard::class,
        ]);
    }
}
