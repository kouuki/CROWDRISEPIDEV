<?php

namespace PIDEV\CrowdRiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use PIDEV\CrowdRiseBundle\Form\MediaType;

class AjoutProjetForm extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('titre')
                ->add('description')
                ->add('idcat', 'entity', array(
                    'class' => 'PIDEVCrowdRiseBundle:Categorie',
                    'property' => 'nom',
                    'label' => "Choisissez une catégorie"))
                ->add('typeFinancement', 'choice', array('choices' => array(
                        'Donnation' => 'Donnation',
                        'Partenaire' => 'Partenaire',
                        'Produit' => 'Produit',
                        'Crédit' => 'Crédit',
                    )
                    , 'empty_value' => "Choisissez le type de Donation")
                )
                ->add('deadlineProjet', 'date', array(
                    'format' => \IntlDateFormatter::SHORT,
                    'input' => 'datetime',
                    'years' => range(date('Y'), 2050),
                    'widget' => 'choice',
                    'data' => new \DateTime("now")))
               
                ->add('image_projet', new MediaType())
                ->add('fichier_projet', 'file')
                ->add('video_projet', 'url')
                
                ->add('Ajouter', 'submit');
        // ->setMethod("GET");
    }

    public function getName() {
        return 'Projet';
    }

}
