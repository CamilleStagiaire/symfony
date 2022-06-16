<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home")
     */
    public function index(PropertyRepository $repository)
    {
        $properties = $repository->findLatest();
        return $this->render("/home.html.twig", [
            'properties' => $properties
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, ContactNotification $notification)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid())
       {
        $notification->contactNotify($contact);
        $this->addFlash('success', 'Email envoyé');
       }
    
        return $this->render("/contact.html.twig", [
            'current_menu' => 'contact',
            'form' => $form->createView()
        ]);
    }

}