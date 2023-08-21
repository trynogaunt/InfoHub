<?php

namespace App\Form;

use App\Entity\AttackInfos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttackInfosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('damage')
            ->add('stamina_use')
            ->add('speed')
            ->add('hitstun')
            ->add('pin')
            ->add('pin_duration')
            ->add('hyperarmor')
            ->add('hyperarmor_startup')
            ->add('superarmor')
            ->add('superarmor_startup')
            ->add('wallsplat')
            ->add('unblockable')
            ->add('undodgeable')
            ->add('feintable')
            ->add('guaranted')
            ->add('bleed')
            ->add('bleed_damage')
            ->add('attack')
            ->add('character')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AttackInfos::class,
        ]);
    }
}
