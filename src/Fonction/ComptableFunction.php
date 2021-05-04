<?php
    namespace App\Fonction;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use App\Entity\Visiteur;
    use App\Entity\LigneFraisForfait;
    use App\Entity\Lignefraishorsforfait;
    use App\Entity\Fraisforfait;
    use App\Entity\Fichefrais;
    use App\Entity\Etat;
    use App\Controller\ComptableController;
    use Doctrine\ORM\EntityManagerInterface;

    class ComptableFunction{
        public function test(){
            dump("ça marche");
        }
        public function tblVis($doctrine){
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $visiteurs = $repositoryObjet->findAll();
        
            $lesVisiteurs = array();
            foreach($visiteurs as $unVis){
                array_push($lesVisiteurs, $unVis->getLogin());
            }
            return $lesVisiteurs;
        }
        public function moisA(){
            return array ("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
        }
        public function getDate($mois, $moisA ){
            $m = null;
            for ($i = 1; $i <= 12; $i ++){
                if($mois == $moisA[$i - 1]){
                    $m = $i;
                }
            }
            //$date = sprintf("%02d%04d",$m,$annee);
            return sprintf("%02d%04d",$m,'2020');
        }
        public function getFicheFrais($date,$login,$doctrine){
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $leVis = $repositoryObjet->findByLogin($login);
            $repositoryObjet = $doctrine -> getRepository(Fichefrais::class);
            $ff = $repositoryObjet->findFicheVis($date,$leVis);
            return $ff;

        }
        public function getLigneHorsForfait($date,$login, $doctrine){
            dump($doctrine);
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $leVis = $repositoryObjet->findByLogin($login);
            dump($leVis);
            $repositoryObjet = $doctrine -> getRepository(Lignefraishorsforfait::class);
            $vi = $repositoryObjet -> findByFicheFraisVis($date,$leVis);
            $tab = array();
            foreach($vi as $element)
            {
                $tab2 =  array("date" => $element->getDate()->format('Y-m-d'), "libelle" => $element->getLibelle(), "montant" => $element->getMontant());
                array_push ($tab, $tab2);
            }
            return $tab;
        }
        public function getLigneFraisForfait($date,$login,$doctrine){
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $leVis = $repositoryObjet->findByLogin($login);
            $repositoryObjet = $doctrine -> getRepository(LigneFraisForfait::class);
            $lff = $repositoryObjet -> findByLFicheFraisVis($date,$leVis);
            $tab = array();
            for ($i = 0; $i < count($lff); $i++) {
                $tab2 =  array("quantite" => $lff[$i]->getQuantite(),
                    "libelle" => $lff[$i]->getIdFraisForfait()->getLibelle(),
                    "montant" => $lff[$i]->getIdFraisForfait()->getMontant(),
                    "idFraisForfait" => $lff[$i]->getIdFraisForfait()->getIdFraisForfait());
                array_push ($tab, $tab2);
            }
            return $tab;
        }

    }

?>