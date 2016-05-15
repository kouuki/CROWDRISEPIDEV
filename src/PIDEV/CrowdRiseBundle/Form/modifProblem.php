<?php
namespace PIDEV\CrowdRiseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class modifProblem extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('titre')
                ->add('description')
                ->add('dateProbleme', 'date', array(
                    'format' => \IntlDateFormatter::MEDIUM,
                    'input' => 'datetime',
                    'years' => range(date('Y'), 2050),
                    'widget' => 'choice',
                    'data' => new \DateTime("now")))
                ->add('deadlineProbleme')
                
                ->add('categorie', 'choice', array(
                    'choices' => array('Financier' => 'Financier', 'Technique' => 'Technique', 'Administratif' => 'Administratif','Social'=>'Social','Marketing'=>'Marketing','Autre'=>'Autre'),
                ))

                
               
                ->add('Modifier', 'submit');
    }

    public function getName() {
        return 'nom';
    }
}