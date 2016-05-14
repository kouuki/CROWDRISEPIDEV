<?php
namespace PIDEV\CrowdRiseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use PIDEV\CrowdRiseBundle\Form\MediaType;
class ajoutProblem extends AbstractType {

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
                
                 ->add('MembreId')
                ->add('categorie', 'choice', array(
                    'choices' => array(' ' => ' ','Financier' => 'Financier', 'Technique' => 'Technique', 'Administratif' => 'Administratif','Social'=>'Social','Marketing'=>'Marketing','Autre'=>'Autre'),
                ))

                ->add('fichier', new MediaType())
                
               
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'nom';
    }
}