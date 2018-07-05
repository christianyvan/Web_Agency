<?php

namespace OC\WebAgencyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title',TextType::class,array('attr' =>array('class'=>'form-control')))
				->add('name',TextType::class,array('attr' =>array('class'=>'form-control')))
				->add('content',TextareaType::class,array('attr'=>array('class'=>'form-control ckeditor')))
				->add('email',TextType::class,array('attr' =>array('class'=>'form-control')))
				->add('image',TextType::class,array('attr' =>array('class'=>'form-control')))
				->add('category',TextType::class,array('attr'=>array('class'=>'form-control')))
				;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OC\WebAgencyBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'oc_webagencybundle_post';
    }


}
