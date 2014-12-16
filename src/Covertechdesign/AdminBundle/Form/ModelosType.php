<?php

namespace Covertechdesign\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModelosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array(
                    'label' => 'Nombre del modelo',
                    'attr'=>array('style'=>'width:120px;margin-left: auto;margin-right: auto;')
                ))     
                ->add('idmarca', 'entity', array(
                    'class' => 'CovertechdesignAdminBundle:Marcas',
                    'property' => 'nombre',
                    'attr'=>array('style'=>'width:120px;margin-left: auto;margin-right: auto;'),
                    'label' => 'Marca',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Covertechdesign\AdminBundle\Entity\Modelos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'covertechdesign_adminbundle_modelos';
    }
}
