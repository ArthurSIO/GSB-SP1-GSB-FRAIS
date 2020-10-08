<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


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
            $reponse = $bdd->query('SELECT id,login,mdp FROM Visiteur');
            $test = 0;
            while ($donnees = $reponse->fetch())
            {
                if($data['nom_utilisateur'] == $donnees['login'] AND $data['mdp_utilisateur'] == $donnees['mdp'])
                {    
                    $test = 1;
                    $session = $request -> getSession();
                    $session -> set('login',$data['nom_utilisateur']);
                    $session -> set('id',$donnees['id']);
                    $id = $donnees['id'];
            }
        }         
        if($test == 1 ){
            return $this->render('visiteur/menuVisiteur.html.twig',['login' => $login = $data['nom_utilisateur'], 'id' => $id ]
            
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
    
    public function donnerDate(Request $request)
    {
        $session = $request -> getSession();
        $moisA = array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        $login = $session -> get('login');
        $id = $session -> get('id');
        $dateCm = date("m");
        $dateCm= (int)$dateCm;
        $dateCa = date("y");
        $dateCa = (int)$dateCa;
        $form = $this->createFormBuilder()
                ->add('mois')
                ->add('annee')
                ->add('valider', SubmitType::class)
                ->getForm();
        $form->handleRequest( $request );
        $m = null;
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            for ($i = 1; $i <= 12; $i ++){
                if($data['mois'] == $moisA[$i - 1]){
                    $m = $i;
                }
            }
            $fiches = array();
            $date = sprintf("%02d%04d",$m,$data['annee']);
            $data = $form->getData();
            $bdd = new \PDO('mysql:host=localhost;dbname=GSBFrais;charset=utf8', 'developpeur', 'azerty');
            $reponse = $bdd->query('SELECT * FROM FicheFrais');
            while ($donnees = $reponse->fetch())
            {
                if($id == $donnees['idVisiteur'] AND $date == $donnees['mois'])
                {
                    array_push($fiches, $donnees);
                }
            }
            return $this->render('visiteur/consulterFiches.html.twig',['mois' => $data['mois'],'annee' => $data['annee'],'login' => $login, 'fiches' =>$fiches ]
            
        );       
        }        
        return $this->render('visiteur/donnerDate.html.twig', [
            'moisA' => $moisA,
            'dateC' => $dateCm,
            'dateA' => $dateCa,
            'login' => $login,
            'formulaire' => $form->createView()           
        ]);
    }
    public function renseigner(Request $request){
        return $this->render('visiteur/renseignerFiche.html.twig',['login' => $login = 0]
        );
    }
}
?>

