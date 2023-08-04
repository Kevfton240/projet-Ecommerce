<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\Carrier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Sodium\add;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       $user = $options['user'];
        $builder
            ->add('adresses', EntityType::class,[
                'label'=> "Choissez votre adresse de livarison",
                'required'=> true,
                'class'=> Adresse::class,
                'multiple'=> false,
                'expanded'=> true

            ])

            ->add('carrier', EntityType::class,[
                'label'=> "Choissez votre transpoteur",
                'required'=> true,
                'class'=> Carrier::class,
                'multiple'=> false,
                'expanded'=> true
            ])

            ->add('submit', SubmitType::class, [
                'label'=>"Validé ma commande ",
                'attr'=>[
                    'class'=> "btn btn-success btn-block"
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
          'user'=> array()
        ]);
    }
}
