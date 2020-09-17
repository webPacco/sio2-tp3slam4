<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PremierePageController extends AbstractController
{
    /**
     * @Route("/premiere/page/Hello/{name}", name="premiere_page")
     */
    public function index($name)
    {
        return $this->render('premiere_page/index.html.twig', [
            "controller_name" => "PremierePageController",
            "param_name" => $name,
        ]);
    }
}
