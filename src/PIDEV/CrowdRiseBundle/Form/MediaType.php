<?php
namespace PIDEV\CrowdRiseBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class MediaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file',new FileType(), array('label' => 'Fichier à remettre'))
            ->add('Enregistrer', 'submit')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
//    public function setDefaultOptions(OptionsResolverInterface $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'PIDEV\CrowdRiseBundle\Entity\Media'
//        ));
//    }
    
     public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PIDEV\CrowdRiseBundle\Entity\Solution',
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}