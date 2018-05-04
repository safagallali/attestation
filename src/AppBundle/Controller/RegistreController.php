<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class RegistreController extends Controller
{
	/**
	 * @Route("/register", name="register")
	 * @param Request $request
	 * @param UserPasswordEncoderInterface $password
	 * @param \Swift_Mailer $mailer
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function register( Request $request, UserPasswordEncoderInterface $password, \Swift_Mailer $mailer)
    {
	    $generator = new ComputerPasswordGenerator();
	    $generator
		    ->setUppercase()
		    ->setLowercase()
		    ->setNumbers()
		    ->setSymbols(false)
		    ->setLength(12);

	    $password_generated = $generator->generatePasswords(1);


        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted() )
        {
          $passwordEncrypted = $password->encodePassword($user,$password_generated[0]);
          $user->setPassword($passwordEncrypted);
          $email = $user->getUsername();
	        $message = (new \Swift_Message('Donées Confidentiel'))
		        ->setFrom('attestation.isi@gmail.com')
		        ->setTo($email)
		        ->setBody(
			        $this->renderView(
			        // app/Resources/views/Emails/registration.html.twig
				        'Emails/registration.html.twig',
				        array('password_generated' => $password_generated[0],'email' => $email)
			        ),
			        'text/html'
		        );
	        $mailer->send($message);

          // enregistrer l'utilisateur
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('login');
        }
        return $this->render('default/register.html.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));

    }

    /**
     * @Route("/list-users", name="users")
     *
     */
    public function listAction()
    {
        $users = $this->getDoctrine()->getRepository("AppBundle:User")->findAll();
        return $this->render("default/liste-users.html.twig",[
            'users' => $users,
        ]);
    }

	/**
	 * @Route("/mail", name="mail")
	 * @param \Swift_Mailer $mailer
	 *
	 * @return Response
	 */
    public function test(\Swift_Mailer $mailer)
   {
	   $generator = new ComputerPasswordGenerator();
	   $generator
		   ->setUppercase()
		   ->setLowercase()
		   ->setNumbers()
		   ->setSymbols(false)
		   ->setLength(12);

	   $password = $generator->generatePasswords(1);

	   $message = (new \Swift_Message('Hello Email'))
		   ->setFrom('attestation.isi@gmail.com')
		   ->setTo('ouerghimahdi@gmail.com')
		   ->setBody($password[0],'text/html');
	    if ($mailer->send($message))
	    {
	    	return new Response('ok');
	    }else{
	    	return new Response('no no ono ');
	    }
   }



}
