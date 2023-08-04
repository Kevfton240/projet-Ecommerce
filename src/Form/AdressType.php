<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label'=> "Quel nom souhaitez-vous donner à votre adresse?",
                'attr'=>[
                    'placeholder'=>"Nommer votre adresse"
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'=> "Votre prenom",
                'attr'=> [
                    'placeholder'=> "Entrez votre prenom"
                ]
            ])
            ->add('lastname', TextType::class, [
                'label'=> "Votre nom",
                'attr'=> [
                    'placeholder'=>"Entrez votre nom"
                ]
            ])
            ->add('company', TextType::class, [
                'label'=> "votre sociéte",
                'attr'=>[
                    'placeholder'=> "(facultatif)Entrez le nom de votre entreprise"
                ]
            ])
            ->add('adress', TextType::class,[
                'label'=> "Votre adresse",
                'attr'=> [
                    'placeholder'=>"101 Rue de la paix..."
                ]
            ])
            ->add('postal', TextType::class,[
                'label'=> "Votre code postal",
                'attr'=> [
                    'placeholder'=> "Entrez votre code postal"
                ]
            ])
            ->add('city', TextType::class, [
                'label'=> "Votre ville",
                'attr'=>[
                    'placeholder'=> "Saisissez votre ville "
                ]
            ])
            ->add('country', CountryType::class,[
                'label'=>" Votre pays",
                'attr'=>[
                    'placeholder'=>"Saisissez votre pays"
                ]
            ])
            ->add('phone', TelType::class, [
                'label'=> "Votre numero de telephone",
                'attr'=> [
                    'placeholder'=> "Saisissez votre numero de telephone"
                ]
            ])
            ->add('submit', SubmitType::class,[
                'label'=> 'Ajouter mon adresse',
                'attr'=> [
                    'class'=> 'btn-block btn-info'
                ]
            ])
        ;
    }
    //public
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}
