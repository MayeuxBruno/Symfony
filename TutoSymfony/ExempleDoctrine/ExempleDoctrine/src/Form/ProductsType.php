<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Suppliers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;



class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ProductName',TextType::class,[
                    'label'=>'Nom du produit',
                    'attr'=>[
                            'placeholder'=>'Produit',
                        ],
                        'constraints'=>[
                            new Regex([
                                'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                                'message' =>'Caractere(s) non valide(s)'
                            ]),
                        ]
                    ])
            ->add('Supplied',EntityType::class,[
                    'class'=>Suppliers::class,
                    'label'=>'Nom du fournisseur',
                    'placeholder'=>'Selectionnez un Fournisseur',
                    ])
                    ->add('picture2', FileType::class, [
                        'label' => 'Photo de profil',
                        //unmapped => fichier non associé à aucune propriété d'entité, validation impossible avec les annotations
                        'mapped' => false,
                        // pour éviter de recharger la photo lors de l'édition du profil
                        'required' => false,
                        'constraints' => [
                            new Image([
                                'maxSize' => '2000k',
                                'mimeTypesMessage' => 'Veuillez insérer une photo au format jpg, jpeg ou png'
                            ])
                            ]
                        ])
            ->add('CategoryID',NumberType::class,[
                    'label'=>'Id de la catégorie'
                    ])
            ->add('QuantityPerUnit',NumberType::class,[
                    'label'=>'Quantité par unité'
                    ])
            ->add('UnitPrice',NumberType::class,[
                    'label'=>'Prix unitaire'
                    ])
            ->add('UnitsInStock',NumberType::class,[
                    'label'=>'Quantité en stock'
                    ])
            ->add('UnitsOnOrder',NumberType::class,[
                    'label'=>'Quantité en commande'
                    ])
            ->add('RecorderLevel',NumberType::class,[
                    'label'=>'Niveau d\'alerte'
            ])
            
               
            ->add('Discontinued')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
