<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiseType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;


class VisiteurController extends AbstractController
{
    public function index(Request $request)
    {      
        //$request = Request::createFromGlobals();
        $form = $this->createFormBuilder()
                ->add('nom_utilisateur', TextType::class)
                ->add('mdp_utilisateur', PasswordType::class)
                ->add('valider', SubmitType::class)
                ->add('annuler', ResetType::class)
                ->getForm();
        $form->handleRequest( $request );
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $bdd = new \PDO('mysql:host=localhost;dbname=GSBFrais;charset=utf8', 'developpeur', 'azerty');
            $reponse = $bdd->query('SELECT login,mdp FROM Visiteur');
            $test = 0;
            while ($donnees = $reponse->fetch())
            {
                if($data['nom_utilisateur'] == $donnees['login'] AND $data['mdp_utilisateur'] == $donnees['mdp'])
                {    
                    $test = 1;
                    $session = $request -> getSession();
                    $session -> set('login',$data['nom_utilisateur']);
            }
        }         
        if($test == 1 ){
            return $this->render('visiteur/menuVisiteur.html.twig',['login' => $login = $data['nom_utilisateur'] ]
            
        );
        }
        else{
            return $this->render('visiteur/connexionVisiteur.html.twig',['formulaire' => $form->createView(),'erreur' => $erreur = 1]        
        );
        }
        
        }
        return $this->render('visiteur/connexionVisiteur.html.twig',['formulaire' => $form->createView(),'erreur' => $erreur = 0]        
        );
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
    public function donnerDate(Request $request)
    {
        $session = $request -> getSession();
        $login = $session -> get('login');
        $dateCa = date("y");
        $dateCa= (int)$dateCa;
        $dateCm = date("m");
        $dateCm= (int)$dateCm;
        $moisA = array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"); 
        return $this->render('visiteur/donnerDate.html.twig', [
            'controller_name' => 'ConsulterController',
            'moisA' => $moisA,
            'dateC' => $dateCm,
            'dateA' => $dateCa,
            'login' => $login
                
            
        ]);
    }
}
?>