<?php
namespace PIDEV\CrowdRiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreditFrom extends AbstractType {

    public function getName() {
        return 'Credit';
    }
    
       public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('passe')
                ->add('Valider', 'submit');
    }
}
