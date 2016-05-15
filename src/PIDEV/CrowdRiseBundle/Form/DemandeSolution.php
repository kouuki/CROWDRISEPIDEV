<?php

namespace PIDEV\CrowdRiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DemandeSolution extends AbstractType {

    public function getName() {
        return 'DemandeName';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('titre')
                ->add('salaire')
                ->add('description')
                ->add('Valider', 'submit')
            ;
    }

}
