<?php

// src/OC/PlatformBundle/Form/AnimalType.php

namespace Ap\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnimalType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('name',      'text')
    ->add('category',     'choice', array(
        'choices'  => array(
        'Reptile' => 'reptile',
        'Mammifère' => 'mammifère',
        'Oiseau' => 'oiseau',),
      'choices_as_values'=>true,))
    ->add('espece',   'text')
    ->add('skinqualifier',    'text')
    ->add('ajouter',      'submit');
  }


  /**
   * @param OptionsResolverInterface $resolver
   */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Ap\PlatformBundle\Entity\animal'
    ));
  }

  /**
   * @return string
   */
  public function getName()
  {
    return 'ap_platformbundle_animal';
  }
}
