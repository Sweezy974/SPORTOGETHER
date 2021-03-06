<?php

namespace sportogether\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class RencontrePublicType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomGroupe')
            ->add('description')
            ->add('sport', ChoiceType::class,   array("choices" => array("football" =>"football","volley-ball" =>"volley-ball",
                                                                         "rugby" =>"rugby","hand-ball" =>"hand-ball",
                                                                         "kanoe-kayak" =>"kanoe-kayak","tennis" =>"tennis",
                                                                         "la pousse" =>"la pousse","boxe" =>"boxe",
                                                                         "cyclisme" =>"cyclisme","parapente" =>"parapente",
                                                                         "course" =>"course")))
            ->add('lieu')
            ->add('date', DateType::class, array('years' => range(2016,2017),))
            ->add('heure',TimeType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sportogether\Bundle\Entity\RencontrePublic'
        ));
    }
}
