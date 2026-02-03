<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BanqueController extends AbstractController
{
    #[Route('/banque', name: 'app_banque_index')]
    public function index(): Response
    {
        return $this->render('back/banque/index.html.twig', [
            'controller_name' => 'BanqueController',
        ]);
    }

    #[Route('/banque/new', name: 'app_banque_new')]
    public function new(): Response
    {
        return $this->render('back/banque/new.html.twig', [
            'controller_name' => 'BanqueController',
        ]);
    }

    #[Route('/banque/{id}/edit', name: 'app_banque_edit')]
    public function edit($id): Response
    {
        // Données de démonstration pour la banque
        $banque = [
            'id' => $id,
            'nom' => 'Banque Zitouna',
            'site_web' => 'www.banquezitouna.com',
            'telephone' => '+216 70 100 100',
            'email' => 'contact@banquezitouna.com',
            'type' => 'banque_islamique',
            'statut' => 'actif',
            'adresse' => 'Avenue Habib Bourguiba, Tunis',
            'ville' => 'Tunis',
            'code_postal' => '1000',
            'responsable' => 'Mohamed Ali',
            'tel_responsable' => '+216 98 765 432',
            'description' => 'Première banque islamique en Tunisie, offrant des services financiers conformes à la charia.',
            'services' => [
                'credit' => true,
                'compte' => true,
                'chequier' => true,
                'carte' => true,
                'retrait' => true,
                'depot' => true,
                'virement' => true,
                'prelevement' => true,
                'assurance' => false,
                'epargne' => true,
                'investissement' => false,
                'change' => true,
                'consultation' => true,
                'chequier_voyage' => false,
                'credit_immobilier' => true,
                'credit_auto' => true
            ]
        ];

        return $this->render('back/banque/edit.html.twig', [
            'controller_name' => 'BanqueController',
            'banque' => $banque,
        ]);
    }

    #[Route('/banque/{id}/show', name: 'app_banque_show')]
    public function show($id): Response
    {
        // Données de démonstration pour l'affichage
        $banque = [
            'id' => $id,
            'nom' => 'Banque Zitouna',
            'site_web' => 'www.banquezitouna.com',
            'telephone' => '+216 70 100 100',
            'email' => 'contact@banquezitouna.com',
            'type' => 'Banque Islamique',
            'statut' => 'Actif',
            'adresse' => 'Avenue Habib Bourguiba, Tunis',
            'ville' => 'Tunis',
            'code_postal' => '1000',
            'responsable' => 'Mohamed Ali',
            'tel_responsable' => '+216 98 765 432',
            'description' => 'Première banque islamique en Tunisie, offrant des services financiers conformes à la charia. Fondée en 2010, elle compte plus de 50 agences à travers le pays.',
            'date_creation' => '2010-05-15',
            'capital' => '500 000 000 TND',
            'agences' => 52,
            'employes' => 1200,
            'services' => [
                'Crédits',
                'Comptes bancaires',
                'Chéquiers',
                'Cartes bancaires',
                'Retrait',
                'Dépôt',
                'Virement',
                'Prélèvement',
                'Épargne',
                'Change de devises',
                'Consultation',
                'Crédit immobilier',
                'Crédit auto'
            ]
        ];

        return $this->render('back/banque/show.html.twig', [
            'controller_name' => 'BanqueController',
            'banque' => $banque,
        ]);
    }
}