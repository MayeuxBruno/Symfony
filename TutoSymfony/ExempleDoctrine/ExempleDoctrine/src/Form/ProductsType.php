<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Suppliers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ProductName',TextType::class,[
                    'label'=>'Nom du produit',
                    'help' => 'Indiquez ici le nom complet du produit',
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
            ->add('CategoryID')
            ->add('QuantityPerUnit')
            ->add('UnitPrice')
            ->add('UnitsInStock')
            ->add('UnitsOnOrder')
            ->add('RecorderLevel')
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
