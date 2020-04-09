<?php

namespace App\Form;

use App\Entity\Artwork;
use Doctrine\DBAL\Types\ArrayType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ArtworkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type_art', ChoiceType::class, [
                'label' => "Type d'image",
                'choices' => $this->getChoices()
            ])
            ->add('imageFile', FileType::class, [
                //'multiple' => true,
                'label' => 'Ajouter une image',
                'label_attr' => ['data-browse' => 'Parcourir'],
                'required' => false,

            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Artwork::class,
        ]);
    }

    private function getChoices()
    {
        $choices = Artwork::TYPE;
        $output = [];
        foreach ($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

//    private function getPicSize()
//    {
//        $artwork = New Artwork();
//        $size = $artwork->getSize($this-> $imageFile );
//
//        return $size;
//
//    }

}
