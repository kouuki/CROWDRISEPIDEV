<?php

namespace PIDEV\CrowdRiseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheProjetForm extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('titre')
                ->add('chercher', 'submit');
    }

    public function getName() {
         return 'libelle';
    }

}
