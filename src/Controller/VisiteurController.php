<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VisiteurController extends AbstractController
{
    public function index()
    {
        
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
            'erreur' => $erreur = 0
        ]);
    }
    public function menu()
    {
        if(empty($_POST['nom_utilisateur'])){
            return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'RenseignerController',
            'erreur' => $erreur = 0
        ]);
        }
        $login = $_POST['nom_utilisateur'];
        $mdp = $_POST['mdp_utilisateur'];
        $bdd = new \PDO('mysql:host=localhost;dbname=GSBFrais;charset=utf8', 'developpeur', 'azerty');
	$reponse = $bdd->query('SELECT login,mdp FROM Visiteur');
        $test = 0;
        while ($donnees = $reponse->fetch())
        {
            if($login == $donnees['login'] AND $mdp == $donnees['mdp'])
            {    
                $test = 1;
            }
        }         
        if($test == 1 ){
            return $this->render('visiteur/menuVisiteur.html.twig', [
                'controller_name' => 'MenuVisiteurController',
                'login' => $login,
                'mdp' => $mdp
                ]);
        }
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'RenseignerController',
            'erreur' => $erreur = 1
        ]);
    }
    public function donnerDate()
    {
        $dateC = date("m");
        $dateC = (int)$dateC;
        $moisA = array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 
        return $this->render('visiteurs/donnerDate.html.twig', [
            'controller_name' => 'ConsulterController',
            'moisA' => $moisA,
            'dateC' => $dateC
            
        ]);
    }
}
?>