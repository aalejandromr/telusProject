<?php

namespace Telus\Example\MyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Sf2PastebinSecurityType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sf2PbsSecurityLevel')
            ->add('sf2PbsSecurityValue')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Telus\Example\MyBundle\Entity\Sf2PastebinSecurity'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'telus_example_mybundle_sf2pastebinsecurity';
    }
}
