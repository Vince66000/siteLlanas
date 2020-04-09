<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;

class SecurityController extends AbstractController
{

    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $authenticationUtils
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login(AuthenticationUtils $authenticationUtils) {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('Security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' =>$error
        ]);


    }

//    /**
//     * @param EntityManagerInterface $manager
//     * @Route("addUser", name="addUSer")
//     */
//    public function newUser(EntityManagerInterface $manager)
//    {
//        $user= new User();
//        $user->setUsername('Ellanas');
//        $user->setPassword($this->passwordEncoder->encodePassword($user, ''));
//        $manager->persist($user);
//        $manager->flush();
//
//        return $this->redirectToRoute('home');
//
//    }
}
