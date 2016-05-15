<?php
namespace PIDEV\CrowdRiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SolutionForm  extends AbstractType {

    public function getName() {
        return 'SolutionName';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('titre')
              
                ->add('description')
                ->add('Enregistrer', 'submit')
            ;
    }

}