<?php

namespace App\Form;

use App\Entity\Character;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Character1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('type')
            ->add('faction')
            ->add('health')
            ->add('stamina')
            ->add('guard_type')
            ->add('guard_direction')
            ->add('unlock_enhanced')
            ->add('sprint_speed')
            ->add('lock_speed')
            ->add('forward_dodge_recovery')
            ->add('lock_speed_side')
            ->add('lock_speed_backward')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}
