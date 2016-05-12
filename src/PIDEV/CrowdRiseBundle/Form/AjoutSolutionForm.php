<?php
namespace PIDEV\CrowdRiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use PIDEV\CrowdRiseBundle\Form\MediaType;

class AjoutSolutionForm  extends AbstractType {

    public function getName() {
        return 'AjoutSolutionName';
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('fichierSolution', new MediaType())
                ->add('Enregistrer', 'submit')
               
            ;
    }
    
    

}