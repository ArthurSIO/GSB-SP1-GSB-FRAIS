<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ComptableController extends AbstractController
{
    public function index()
    {
        return $this->render('comptable/connexionComptable.html.twig', [
            'controller_name' => 'ComptableController',
            'erreur' => $erreur = 0                                            
        ]);
    }
}
?>