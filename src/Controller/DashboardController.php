<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        // Données de test
        $banques = [
            [
                'id' => 1,
                'nomBq' => 'Banque Zitouna',
                'siteWeb' => 'https://www.banquezitouna.com',
                'telephoneBq' => '70 100 100',
                'emailBq' => 'contact@banquezitouna.com',
                'agences' => [
                    ['nomAg' => 'Agence Zitouna Tunis Centre', 'adresseAg' => 'Avenue Habib Bourguiba, Tunis', 'telephone' => '70 100 101'],
                    ['nomAg' => 'Agence Zitouna La Marsa', 'adresseAg' => 'La Marsa, Tunis', 'telephone' => '70 100 102'],
                ]
            ],
            [
                'id' => 2,
                'nomBq' => 'Amen Bank',
                'siteWeb' => 'https://www.amenbank.com.tn',
                'telephoneBq' => '70 101 000',
                'emailBq' => 'info@amenbank.com.tn',
                'agences' => [
                    ['nomAg' => 'Agence Amen Bank Tunis', 'adresseAg' => 'Avenue de la Liberté, Tunis', 'telephone' => '70 101 001'],
                    ['nomAg' => 'Agence Amen Bank Sfax', 'adresseAg' => 'Avenue de la République, Sfax', 'telephone' => '74 300 400'],
                ]
            ],
        ];
        
        $stats = [
            'total_banques' => 12,
            'total_agences' => 45,
        ];
        
        return $this->render('back/dashboard/index.html.twig', [
            'banques' => $banques,
            'stats' => $stats,
        ]);
    }
}