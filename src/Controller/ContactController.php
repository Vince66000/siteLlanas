<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class ContactController extends AbstractController {

    private $twig;


    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     * @Route("/contact", name="contact" )
     */
    public function index() :Response
    {

        return new Response($this->twig->render('contact/contact.html.twig'));

    }

    /**
     * @param Request $request
     * @param ContactNotification $notification
     * @return Response
     * @Route("contact/newMail", name="contact/newMail")
     */
    public function newMail( Request $request, ContactNotification $notification): Response
    {

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notification->notify($contact);
            $this->addFlash('success', 'votre message a bien été envoyé!');
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/newMail.html.twig', [
            'contact' => $contact,
            'form' => $form->createView()

    ]);
    }


}
