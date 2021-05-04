<?php

namespace App\Controller;

use DateTime;
use App\Fonction\VisiteurFunction;
use App\Entity\Visiteur;
use App\Entity\LigneFraisForfait;
use App\Entity\Lignefraishorsforfait;
use App\Entity\Fraisforfait;
use App\Entity\Fichefrais;
use App\Entity\Etat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class VisiteurController extends AbstractController
{
    public function index(Request $request)
    {      
        //$request = Request::createFromGlobals();
        $form = $this->createFormBuilder()
                ->add('nom_utilisateur', TextType::class)
                ->add('mdp_utilisateur', PasswordType::class)
                ->getForm();
        $form->handleRequest( $request );
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $doctrine = $this -> getDoctrine();
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $vi = $repositoryObjet -> findByLoginAndMdp($data['nom_utilisateur'], $data['mdp_utilisateur']);
            if (count($vi) == 0){
                return $this->render('visiteur/connexion/connexionVisiteur.html.twig',[
                    'formulaire' => $form->createView(),
                    'erreur' => $erreur = 1
                    ]);
            }
            else{
                $session = $request -> getSession();
                $session -> set('login',$data['nom_utilisateur']);
                $session -> set('id',$vi[0]->getId());
                return $this->render('visiteur/menu/menuVisiteur.html.twig',[
                    'login' => $login = $data['nom_utilisateur']
                         ]);
            }       
        }
        return $this->render('visiteur/connexion/connexionVisiteur.html.twig',[
            'formulaire' => $form->createView(),
            'erreur' => $erreur = 0]);
    }
    
    public function donnerDate(Request $request)
    {
        $fonctionVis = new VisiteurFunction();
        $moisA = array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        $session = $request -> getSession();
        $login = $session -> get('login');
        $id = $session -> get('id');
        dump($session -> get('id'));
        $dateCm= (int)date("m");
        $dateCa = (int)date("y");
        $form = $this->createFormBuilder()
                ->add('mois')
                ->add('annee')
                ->add('valider', SubmitType::class)
                ->getForm();
        $form->handleRequest( $request );
        $m = null;
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $date = $fonctionVis->getDate($data['mois'], $data['annee'], $moisA);
            $tab = $fonctionVis->getLigneHorsForfait($date, $this-> getDoctrine());
            $tab1 = $fonctionVis->getLigneFraisForfait($date, $this-> getDoctrine());
            return $this->render('visiteur/consulterFrais/consulterFiches.html.twig',['mois' => $data['mois'],
                'annee' => $data['annee'],
                'login' => $login,   
                'tab' => $tab,
                'taille' => count($tab),
                'tab1' => $tab1,
                'taille1' => count($tab1)
                ]);       
        }        
        return $this->render('visiteur/consulterFrais/donnerDate.html.twig', [
            'moisA' => $moisA,
            'dateC' => $dateCm,
            'dateA' => $dateCa,
            'login' => $login,
            'formulaire' => $form->createView()           
        ]);
    }
    
    public function renseigner(Request $request){
        $fonctionVis = new VisiteurFunction();
        $session = $request -> getSession();
        $idVis = $session->get('id');
        $msg = "";
        $dateCa = '20' . (string)date("y");
        $dateTest = date("m") - 1;
        $dateMoisPrec = sprintf("%02d%04d",$dateTest,$dateCa);
        //dump($dateMoisPrec);
        $date = $fonctionVis->creerDate();
        $ff = $this->getDoctrine()
            ->getRepository(Fichefrais::class)
            ->findFiche($date);
        $date2 = new DateTime("2020-12-10");
        $test = 0;
        if (count($ff) == 0){ 
            $msg = $fonctionVis->nouveauMois($idVis,$this->getDoctrine()->getManager(), $date2);
        }   
        $tab = $fonctionVis->getLigneHorsForfait($date, $this-> getDoctrine());
        $tab1 = $fonctionVis->getLigneFraisForfait($date, $this-> getDoctrine());
        
        return $this->render('visiteur/renseignerFiche/renseignerFiche.html.twig',['login' => $session -> get('login'),
                'tab' => $tab,
                'taille' => count($tab),
                'tab1' => $tab1,
                'taille1' => count($tab1),
                'test' => $date,
                'msg' => $msg,
                ]
        );
    }
    public function creerHF(Request $request){
        $fonctionVis = new VisiteurFunction();
        $session = $request -> getSession();
        $idVis = $session->get('id');
        $doctrine = $this -> getDoctrine();
        $form = $this->createFormBuilder()
                ->add('libelle', TextType::class, [
                    'label' => 'Libelle',
                    'attr' => ['class' => 'btnHF']])
                ->add('date', TextType::class, [
                    'label' => 'date',
                    'attr' => ['class' => 'btnHF']])
                ->add('montant', TextType::class, [
                    'label' => 'montant',
                    'attr' => ['class' => 'btnHF']])
                ->add('valider', SubmitType::class, [
                    'attr' => ['class' => 'submit-creeHF']])
                ->getForm();
        $form->handleRequest( $request );
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            if($fonctionVis->verifDate($data['date']) == false){
                return $this->render('visiteur/renseignerFiche/creerHorsForfait.html.twig',[
                    'login' => $session -> get('login'),
                    'formulaire' => $form->createView(),
                ]);
            }
            $jma = explode("/", $data['date']);
            $laDate = $jma[2] . "-" . $jma[1] . "-" . $jma[0];
            $entityManager = $this->getDoctrine()->getManager();
            $doctrine = $this -> getDoctrine();
            $date = $fonctionVis->creerDate();
            $msg = $fonctionVis->creerHorsForfait($entityManager,$doctrine,$laDate, $data['libelle'], $data['montant'], $idVis,$date);
            $tab = $fonctionVis->getLigneHorsForfait($date, $this-> getDoctrine());
            $tab1 = $fonctionVis->getLigneFraisForfait($date, $this-> getDoctrine());
            return $this->render('visiteur/renseignerFiche/renseignerFiche.html.twig',[
                'login' => $session -> get('login'),
                'tab' => $tab,
                'taille' => count($vi),
                'tab1' => $tab1,
                'taille1' => count($tab1),
                'msg' => $msg = ""
                ]);
        }
        return $this->render('visiteur/renseignerFiche/creerHorsForfait.html.twig',[
                'login' => $session -> get('login'),
                'formulaire' => $form->createView(),
                ]
        );
    }
}
?>

