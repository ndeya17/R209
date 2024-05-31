<?php

namespace App\Form;

use App\Entity\Experiences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExperiencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ide')
            ->add('dateD')
            ->add('dateF')
            ->add('nomEtablissement')
            ->add('villeEtablissement')
            ->add('nomPoste')
            ->add('mission')
            ->add('responsable')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Experiences::class,
        ]);
    }
}
