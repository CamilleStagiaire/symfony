<?php

namespace App\Form;

use App\Entity\Option;
use App\Entity\Property;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', null, [
                'label' => 'Titre'
            ])
            ->add('description')
            ->add('surface')
            ->add('rooms', null, [
                'label' => 'Nombre de chambres'
            ])
            ->add('bed', null, [
                'label' => 'Nombre de couchages'
            ])
            ->add('price', null, [
                'label' => 'Prix à la semaine'
            ])
            ->add('city', null, [
                'label' => 'Ville'
            ])
            ->add('adress', null, [
                'label' => 'Adresse'
            ])
            ->add('postal_code', null, [
                'label' => 'Code Postal'
            ])
           // ->add('lat')
           // ->add('lng')
           // ->add('sold')
            ->add('animal')

            ->add('imageFile', FileType::class, [
                'required' => false
            ])
            ->add('options', EntityType::class, [
                'class' => Option::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
        ]);
    }
}
