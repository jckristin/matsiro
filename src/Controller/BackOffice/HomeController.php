<?php

namespace App\Controller\BackOffice;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/', name: 'app_back_office_')]
final class HomeController extends AbstractController
{
    #[Route('', name: 'home')]
    public function index(): Response
    {
        return $this->render('back_office/home/index.html.twig', [
            'controller_name' => 'BackOffice//HomeController',
        ]);
    }
}
