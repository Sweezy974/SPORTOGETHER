<?php

namespace sportogether\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('age', DateType::class, array('years' => range(1920,1998),))
            ->add('adresse')
            ->add('telephone')
            ->add('sexe' , ChoiceType::class,   array("choices" => array("Femme" =>"Femme","Homme" =>"Homme",)))
            ->add('sport')
            ->add('description' )
            ->add('recherche' , ChoiceType::class,   array(
                "choices" => array(
                    "Sélectionner dans la liste" =>"Sélectionner dans la liste",
                    "une femme qui recherche un homme" =>"une femme qui recherche un homme",
                "un homme qui recherche une femme" =>"un homme qui recherche une femme",
                "une femme qui recherche une femme" =>"une femme qui recherche une femme",
                "un homme qui recherche un homme" =>"un homme qui recherche un homme",
                "un homme qui recherche un homme et/ou une femme" =>"un homme qui recherche un homme et/ou une femme",
                                "une femme qui recherche un homme et/ou une femme" =>"une femme qui recherche un homme et/ou une femme",
                                "relation amical"=>"relation amical",
                ) ))
        ;
    }




    public function getParent()
  {
    return 'FOS\UserBundle\Form\Type\RegistrationFormType';
  }

  public function getBlockPrefix()
  {
    return 'app_user_registration';
  }

  // For Symfony 2.x
  public function getName()
  {
    return $this->getBlockPrefix();
  }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'sportogether\Bundle\Entity\User'
        ));
    }
}
