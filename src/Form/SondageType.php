<?php

namespace App\Form;

use App\Entity\Aliment;
use App\Entity\Sondage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotEqualTo;

class SondageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('DateCreation')
            ->add('IdUtilisateur')
            ->add('Aliment1')
            ->add('Aliment2')
            ->add('Aliment3')
            ->add('Aliment4')
            ->add('Aliment5')
            ->add('Aliment6')
            ->add('Aliment7')
            ->add('Aliment8')
            ->add('Aliment9')
            ->add('Aliment10')


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sondage::class,
        ]);
    }
}
