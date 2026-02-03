<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreController extends AbstractController
{
    #[Route('/offres', name: 'app_offre_index')]
    public function index(): Response
    {
        return $this->render('back/offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }

    #[Route('/offres/new', name: 'app_offre_new')]
    public function new(): Response
    {
        // Données pour les sélecteurs
        $banques = [
            ['id' => 1, 'nom' => 'Banque Zitouna'],
            ['id' => 2, 'nom' => 'Amen Bank'],
            ['id' => 3, 'nom' => 'BIAT'],
            ['id' => 4, 'nom' => 'UBCI'],
            ['id' => 5, 'nom' => 'ATB'],
            ['id' => 6, 'nom' => 'Banque de Tunisie'],
            ['id' => 7, 'nom' => 'Wifak Bank'],
            ['id' => 8, 'nom' => 'Banque Nationale Agricole'],
        ];

        $agences = [
            ['id' => 1, 'nom' => 'Agence Centre Ville - Tunis'],
            ['id' => 2, 'nom' => 'Agence Lac 1 - Tunis'],
            ['id' => 3, 'nom' => 'Agence Menzah - Tunis'],
            ['id' => 4, 'nom' => 'Agence La Marsa - Tunis'],
            ['id' => 5, 'nom' => 'Agence Sousse Centre'],
            ['id' => 6, 'nom' => 'Agence Sfax Médina'],
        ];

        return $this->render('back/offre/new.html.twig', [
            'controller_name' => 'OffreController',
            'banques' => $banques,
            'agences' => $agences,
        ]);
    }

    #[Route('/offres/{id}/edit', name: 'app_offre_edit')]
    public function edit($id): Response
    {
        // Données de démonstration pour une offre
        $offre = [
            'id' => $id,
            'nom' => 'Offre Crédit Immobilier - Taux Réduit',
            'description' => 'Profitez d\'un taux exceptionnel pour votre crédit immobilier. Offre limitée dans le temps.',
            'date_debut' => '2024-01-15',
            'date_fin' => '2024-06-30',
            'type_offre' => 'taux_reduit',
            'conditions' => 'Client doit avoir plus de 18 ans, justifier d\'un revenu stable, premier crédit immobilier uniquement.',
            'banque_id' => 1,
            'banque_nom' => 'Banque Zitouna',
            'agence_id' => 1,
            'agence_nom' => 'Agence Centre Ville - Tunis',
            'statut' => 'active',
            'vues' => 1250,
            'applications' => 89,
            'taux_interet' => '3.5%',
            'montant_min' => '50 000 TND',
            'montant_max' => '500 000 TND',
            'duree_max' => '240 mois',
            'frais_dossier' => 'Gratuits',
            'date_creation' => '2024-01-10',
            'createur' => 'Mohamed Ben Ali',
            'tags' => ['immobilier', 'taux réduit', 'premier crédit'],
            'documents_requis' => [
                'Carte d\'identité nationale',
                'Justificatif de domicile',
                '3 dernières fiches de paie',
                'Contrat de travail'
            ]
        ];

        $banques = [
            ['id' => 1, 'nom' => 'Banque Zitouna'],
            ['id' => 2, 'nom' => 'Amen Bank'],
            ['id' => 3, 'nom' => 'BIAT'],
            ['id' => 4, 'nom' => 'UBCI'],
        ];

        $agences = [
            ['id' => 1, 'nom' => 'Agence Centre Ville - Tunis'],
            ['id' => 2, 'nom' => 'Agence Lac 1 - Tunis'],
            ['id' => 3, 'nom' => 'Agence Menzah - Tunis'],
        ];

        return $this->render('back/offre/edit.html.twig', [
            'controller_name' => 'OffreController',
            'offre' => $offre,
            'banques' => $banques,
            'agences' => $agences,
        ]);
    }

    #[Route('/offres/{id}/show', name: 'app_offre_show')]
    public function show($id): Response
    {
        // Données de démonstration pour l'affichage
        $offre = [
            'id' => $id,
            'nom' => 'Offre Crédit Immobilier - Taux Réduit',
            'description' => 'Profitez d\'un taux exceptionnel pour votre crédit immobilier. Offre limitée dans le temps. Cette offre spéciale vous permet de réaliser votre projet immobilier avec des conditions avantageuses.',
            'date_debut' => '15 Janvier 2024',
            'date_fin' => '30 Juin 2024',
            'type_offre' => 'Taux Réduit',
            'conditions' => '• Client doit avoir plus de 18 ans\n• Justifier d\'un revenu stable minimum 1500 TND/mois\n• Premier crédit immobilier uniquement\n• Aucun incident bancaire\n• Dossier complet requis',
            'banque_nom' => 'Banque Zitouna',
            'agence_nom' => 'Agence Centre Ville - Tunis',
            'statut' => 'Active',
            'vues' => 1250,
            'applications' => 89,
            'taux_interet' => '3.5%',
            'montant_min' => '50 000 TND',
            'montant_max' => '500 000 TND',
            'duree_max' => '240 mois (20 ans)',
            'frais_dossier' => 'Gratuits',
            'frais_assurance' => '0.3% par an',
            'date_creation' => '10 Janvier 2024',
            'createur' => 'Mohamed Ben Ali',
            'tags' => ['immobilier', 'taux réduit', 'premier crédit', 'offre spéciale'],
            'documents_requis' => [
                'Carte d\'identité nationale',
                'Justificatif de domicile (moins de 3 mois)',
                '3 dernières fiches de paie',
                'Contrat de travail',
                'Relevé d\'identité bancaire',
                'Avis d\'imposition (si disponible)'
            ],
            'avantages' => [
                'Taux fixe garanti pendant toute la durée du crédit',
                'Frais de dossier offerts',
                'Assurance décès-invalidité incluse',
                'Possibilité de remboursement anticipé sans frais',
                'Assistance personnalisée'
            ]
        ];

        return $this->render('back/offre/show.html.twig', [
            'controller_name' => 'OffreController',
            'offre' => $offre,
        ]);
    }
}