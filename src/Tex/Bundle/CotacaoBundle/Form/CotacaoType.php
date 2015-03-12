<?php

namespace Tex\Bundle\CotacaoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CotacaoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('facebook')
            ->add('email')
            ->add('termoOk')
            ->add('token')
            ->add('codCar')
            ->add('descricaoCar')
            ->add('isMoto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tex\Bundle\CotacaoBundle\Entity\Cotacao'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tex_bundle_cotacaobundle_cotacao';
    }
}
