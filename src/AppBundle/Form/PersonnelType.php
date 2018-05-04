<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonnelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	        ->add('cin')
	        ->add('username', TextType::class, array(
		        'label' => 'Login'
	        ))
	        ->add('email', EmailType::class, ['attr' => ['placeholder' => 'Email de personnel']])
	        ->add('matricule')
	        ->add('name', TextType::class, ['label' => 'Nom', 'attr' => ['placeholder'=> 'Nom de l\'employé' ]])
	        ->add('lastName', TextType::class, ['label' => 'Prénom', 'attr' => ['placeholder'=> 'Prénom de l\'employé' ]])
	        ->add('nationality', TextType::class, ['label' => 'Nationalité', 'attr' => ['placeholder'=> 'Nationalité de l\'employé' ]])
	        ->add('adresse', TextType::class, [ 'attr' => ['placeholder'=> 'Adresse de l\'employé' ]])
	        ->add('status', ChoiceType::class, array(
		        'multiple' => false,
		        'choices' => [
			        'Célébataire' => 'celebataire',
			        'Marié' => 'marie',
		        ],
	        ))
	        ->add('workingDuration', IntegerType::class, ['label' => 'Durée d\'heure  par année'])
	        ->add('income', IntegerType::class, ['label' => 'Revenu'])
	        ->add('cost', IntegerType::class, ['label' => 'Montant'])
	        ->add('grade',EntityType::class,[
		        'class' => 'AppBundle:Grade',
		        'choice_label' => 'libelleG',
		        'placeholder' => 'Choisissez un grade'
	        ])
	        ->add('save', SubmitType::class, ['label' => 'Enregistrer', 'attr' => ['class' => 'btn btn-primary']])
	        ;
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Personnel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_personnel';
    }


}
