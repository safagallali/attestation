<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistreController extends Controller
{
    /**
     * @Route("/registre", name="register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registreAction( Request $request, UserPasswordEncoderInterface $password)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isValid() && $form->isSubmitted() )
        {
          $passwordEncrypted = $password->encodePassword($user, $user->getPassword());
          $user->setPassword($passwordEncrypted);

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
     * @Route("/liste-users", name="users")
     *
     */
    public function listeAction()
    {
        $users = $this->getDoctrine()->getRepository("AppBundle:User")->findAll();
        return $this->render("default/liste-users.html.twig",[
            'users' => $users,
        ]);
    }



}
