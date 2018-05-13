<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, array(
            	'label' => 'Login'
            ))
	        ->add('email', EmailType::class, ['attr' => ['placeholder' => 'Email de l\'utilisateur ']])
            ->remove('password')
	        ->add('cin')
	        ->add('matricule')
	        ->add('name', TextType::class, ['label' => 'Nom', 'attr' => ['placeholder'=> 'Nom de l\'employé' ]])
	        ->add('lastName', TextType::class, ['label' => 'Prénom', 'attr' => ['placeholder'=> 'Prénom de l\'employé' ]])
	        ->add('nationality', TextType::class, ['label' => 'Nationalité', 'attr' => ['placeholder'=> 'Nationalité de l\'employé' ]])
	        ->add('address', TextType::class, [ 'attr' => ['placeholder'=> 'Adresse de l\'employé' ]])
	        ->add('status', ChoiceType::class, array(
		        'multiple' => false,
		        'choices' => [
			        'Célébataire' => 'celebataire',
			        'Marié' => 'marie',
		        ],
	        ))
	        ->add('workingDuration', IntegerType::class, ['label' => 'Durée d\'heure  par année'])
	        ->add('mission', TextType::class)
	        ->add('numberOfChildren', IntegerType::class, ['label' => 'Nombres d\'enfant'])
	        ->add('privilege', IntegerType::class, ['label' => 'Privilége'])
            ->add('roles', ChoiceType::class, array(
                'multiple' => true,
                'expanded' => true,
                'choices' => [
                    'Admin' => 'ROLE_ADMIN',
                    'Agent' => 'ROLE_USER',
                ],
            ))
	        ->add('revenuImposable', MoneyType::class, array(
	        	'label' => 'Revenu Imposable',
		        'divisor' => 100,
		        'currency' => 'TND'
	        ))
            ->add('grade',EntityType::class,[
                'class' => 'AppBundle:Grade',
                'choice_label' => 'libelleG',
                'placeholder' => 'Choisissez un grade'
            ])
            ->add('services', EntityType::class, array(
                'class' => 'AppBundle\Entity\Services',
                'choice_label' => 'libelle',
                'placeholder' => 'choisissez un service'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}