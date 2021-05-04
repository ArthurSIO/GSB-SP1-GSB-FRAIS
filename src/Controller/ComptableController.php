<?php

namespace App\Controller;

use App\Fonction\ComptableFunction;
use App\Entity\Visiteur;
use App\Entity\Fichefrais;
use App\Entity\Lignefraishorsforfait;
use App\Entity\LigneFraisForfait;
use App\Entity\Fraisforfait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Comptable;

class ComptableController extends AbstractController
{
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('nom_utilisateur', TextType::class)
                ->add('mdp_utilisateur', PasswordType::class)
                ->getForm();
        $form->handleRequest( $request );
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $doctrine = $this -> getDoctrine();
            $repositoryObjet = $doctrine -> getRepository(Comptable::class);
            $vi = $repositoryObjet -> findByLoginAndMdp($data['nom_utilisateur'], $data['mdp_utilisateur']);
            if (count($vi) == 0){
                return $this->render('comptable/connexion/connexionComptable.html.twig',[
                    'formulaire' => $form->createView(),
                    'erreur' => $erreur = 1
                    ]);
            }
            else{
                $session = $request -> getSession();
                $session -> set('login',$data['nom_utilisateur']);
                $session -> set('id',$vi[0]->getId());
                return $this->render('comptable/menu/menuComptable.html.twig',[
                    'login' => $login = $data['nom_utilisateur']
                         ]);
            }       
        }
        
        return $this->render('comptable/connexion/connexionComptable.html.twig', [
            'formulaire' => $form->createView(),
            'erreur' => $erreur = 0                                            
        ]);
    }

    public function choisirVisMois(Request $request){
        $foncComptable = new ComptableFunction();
        $session = $request -> getSession();
        $login = $session -> get('login');
        $dateCm= (int)date("m");
        $doctrine = $this -> getDoctrine();
        $lesVisiteurs = $foncComptable->tblVis($doctrine);
        $form = $this->createFormBuilder()
                ->add('visiteur')
                ->add('mois')
                ->add('valider', SubmitType::class)
                ->getForm();
        $form->handleRequest( $request );
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $date = $foncComptable->getDate($data['mois'],$foncComptable->moisA());
            $login = $data['visiteur'];
            $ff = $foncComptable->getFicheFrais($date,$login,$doctrine);
            if (count($ff) > 0){ 
                $tab1 = $foncComptable->getLigneFraisForfait($date,$login,$doctrine);
                $tab = $foncComptable->getLigneHorsForfait($date,$login,$doctrine);
                $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
                $leVis = $repositoryObjet->findByLogin('lvillachane');
                //dump($lf);
                //dump($lhf);
                $session = $request -> getSession();
                $session -> set('tblFf',$tab1);
                return $this->render('comptable/validerFiche/validerFiche.html.twig',[
                    'login' => $login,
                    'tab' => $tab,
                    'taille' => count($tab),
                    'tab1' => $tab1,
                    'taille1' => count($tab1)
                ]);
            }else{
                return $this->render('comptable/validerFiche/choisirVisMois.html.twig',[
                    'moisA' => $foncComptable->moisA(),
                    'dateC' => $dateCm,
                    'login' => $login,
                    'tab' => $lesVisiteurs,
                    'taille' => count($lesVisiteurs),
                    'msg' => $msg = "Il n'existe pas de fiche de frais pour le mois de " . $data['mois'],
                    'formulaire' => $form->createView()
                ]);
            }
            
        }
        return $this->render('comptable/validerFiche/choisirVisMois.html.twig',[
            'moisA' => $foncComptable->moisA(),
            'dateC' => $dateCm,
            'login' => $login,
            'tab' => $lesVisiteurs,
            'taille' => count($lesVisiteurs),
            'msg' => $msg = null,
            'formulaire' => $form->createView()
        ]);
    }


    public function validerFiche(){

    }
    public function suivrePaiementFiche(){

    }
    public function actualiseFrais(int $idFraisForfait,Request $request){
        $session = $request -> getSession();
        $login = $session -> get('login');
        $tbl = $session -> get('tblFf');
        $form = $this->createFormBuilder()
                ->add('libelle', TextType::class, ['empty_data' => 'Default value','attr' => ['id' => 'libelle']])
                ->add('montant', TextType::class, ['attr' => ['class' => 'montant']])
                ->add('quantite', TextType::class, ['attr' => ['class' => 'quantite']])
                ->add('valider', SubmitType::class)
                ->getForm();
        $form->handleRequest( $request );
        return $this->render('comptable/validerFiche/actualiseFraisForfait.html.twig',[
            'login' => $login,
            'id' => $idFraisForfait,
            'tbl' => $tbl,
            'formulaire' => $form->createView()
        ]);

    }
}
?>