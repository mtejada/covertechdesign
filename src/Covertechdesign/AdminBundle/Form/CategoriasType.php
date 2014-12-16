<?php

namespace Covertechdesign\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array(
                    'label' => 'Nombre de la categoria',
                    'attr'=>array('style'=>'width:120px;margin-left: auto;margin-right: auto;')
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Covertechdesign\AdminBundle\Entity\Categorias'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'covertechdesign_adminbundle_categorias';
    }
}
