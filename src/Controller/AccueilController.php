<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    public function index()
    {
		$bdd = new \PDO('mysql:host=localhost;dbname=GSBFrais;charset=utf8', 'developpeur', 'azerty');
		$reponse = $bdd->query('SELECT nom FROM Visiteur where id = "a131"');
		$donnees = $reponse->fetch();
		$nom = $donnees[0];
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'nom' => $nom
        ]);
    }
}
?>