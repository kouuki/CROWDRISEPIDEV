<?php

namespace PIDEV\CrowdRiseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProblemeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('dateProbleme')
            ->add('deadlineProbleme')
            ->add('fichierProbleme')
            ->add('MembreId')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIDEV\CrowdRiseBundle\Entity\Probleme'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_crowdrisebundle_probleme';
    }
}
