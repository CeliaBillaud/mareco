<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Part\File;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;


class UserController extends AbstractController
{

    #[Route('/inscription', name: 'app_user_register', methods: ['GET', 'POST'])]
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordHasher->hashPassword($user,$user->getPassword())
            );
            $user->setRoles(["ROLE_USER"]);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('secondary', 'Votre compte a bien été créé, un email de confirmation vous a été envoyé.');

            //todo : change redirection when login page is created
            return $this->redirectToRoute('app_user_login', [], Response::HTTP_SEE_OTHER);
        } else {
            return $this->render('user/registration.html.twig', [
                'formUser' => $form,
            ]);
        }   
    }

    #[Route(path: '/connexion', name: 'app_user_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('user/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/deconnexion', name: 'app_user_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');}
    }
