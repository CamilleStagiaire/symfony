<?php

namespace App\Controller;

use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home")
     */
    public function index(PropertyRepository $repository)
    {
        $properties = $repository->findLatest();
        return $this->render("pages/home.html.twig", [
            'properties' => $properties
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
    
        return $this->render("pages/contact.html.twig", [
            'current_menu' => 'contact'
        ]);
    }

}