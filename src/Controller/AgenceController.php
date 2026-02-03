<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgenceController extends AbstractController
{
    #[Route('/agence', name: 'app_agence_index')]
    public function index(): Response
    {
        return $this->render('back/agence/index.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }

    #[Route('/agence/new', name: 'app_agence_new')]
    public function new(): Response
    {
        return $this->render('back/agence/new.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }

    #[Route('/agence/{id}/edit', name: 'app_agence_edit')]
    public function edit($id): Response
    {
        // Données simulées pour démonstration
        $agences = [
            1 => [
                'id' => 1,
                'nom' => 'Agence Zitouna Tunis Centre',
                'banque_id' => 1,
                'type_agence' => 'principale',
                'statut' => 'actif',
                'telephone' => '+216 70 100 101',
                'email' => 'tunis.centre@banquezitouna.com',
                'adresse' => 'Avenue Habib Bourguiba, Tunis',
                'ville' => 'Tunis',
                'code_postal' => '1000',
                'heure_ouverture' => '08:00',
                'heure_fermeture' => '17:00',
                'debut_pause' => '12:00',
                'fin_pause' => '13:30',
                'responsable' => 'Fatma Ben Salah',
                'tel_responsable' => '+216 98 123 456',
                'services' => ['credit', 'compte', 'chequier', 'carte'],
                'description' => 'Agence principale de la Banque Zitouna au centre-ville de Tunis. Équipée de 5 guichets, 2 distributeurs automatiques et une salle de réunion pour les clients.'
            ],
            2 => [
                'id' => 2,
                'nom' => 'Agence Zitouna La Marsa',
                'banque_id' => 1,
                'type_agence' => 'secondaire',
                'statut' => 'actif',
                'telephone' => '+216 70 100 102',
                'email' => 'lamarsa@banquezitouna.com',
                'adresse' => 'La Marsa, Tunis',
                'ville' => 'Tunis',
                'code_postal' => '2070',
                'heure_ouverture' => '08:00',
                'heure_fermeture' => '17:00',
                'debut_pause' => '12:00',
                'fin_pause' => '13:00',
                'responsable' => 'Ali Ben Ahmed',
                'tel_responsable' => '+216 97 654 321',
                'services' => ['credit', 'compte'],
                'description' => 'Agence secondaire située à La Marsa.'
            ]
        ];

        $agence = $agences[$id] ?? $agences[1];

        return $this->render('back/agence/edit.html.twig', [
            'controller_name' => 'AgenceController',
            'agence' => $agence,
        ]);
    }
}