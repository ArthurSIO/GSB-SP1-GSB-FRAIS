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
    use App\Controller\VisiteurController;
    use Doctrine\ORM\EntityManagerInterface;
    use DateTime;

    class VisiteurFunction{
        /*private $main;

        public function __construct(VisiteurController $main){
            $this->$main = $main;
        }*/

        public function test(){
            dump("ça marche");
        }
        public function creerDate(){
            $dateCm= (string)date("m");
            $dateCa = '20' . (string)date("y");
            return sprintf("%02d%04d",$dateCm,$dateCa);
        }
        public function getDate($mois, $annee, $moisA){
            $m = null;
            for ($i = 1; $i <= 12; $i ++){
                if($mois == $moisA[$i - 1]){
                    $m = $i;
                }
            }
            //$date = sprintf("%02d%04d",$m,$annee);
            return sprintf("%02d%04d",$m,$annee);
        }
        public function getLigneHorsForfait($date, $doctrine){
            $repositoryObjet = $doctrine -> getRepository(Lignefraishorsforfait::class);
            $vi = $repositoryObjet -> findByFicheFrais($date);
            $tab = array();
            foreach($vi as $element)
            {
                $tab2 =  array("date" => $element->getDate()->format('Y-m-d'), "libelle" => $element->getLibelle(), "montant" => $element->getMontant());
                array_push ($tab, $tab2);
            }
            return $tab;
        }
        public function getLigneFraisForfait($date,$doctrine){
            $repositoryObjet = $doctrine -> getRepository(LigneFraisForfait::class);
            $lff = $repositoryObjet -> findByLFicheFrais($date);
            $tab = array();
            for ($i = 0; $i < count($lff); $i++) {
                $tab2 =  array("quantite" => $lff[$i]->getQuantite(),
                    "libelle" => $lff[$i]->getIdFraisForfait()->getLibelle(),
                    "montant" => $lff[$i]->getIdFraisForfait()->getMontant());
                array_push ($tab, $tab2);
            }
            return $tab;
        }
        public function nouveauMois($idVis,$doctrine,$date2){
            $vi = $doctrine
                ->getRepository(Visiteur::class)
                ->find($idVis);
            //dump($vi);
            $etat = $doctrine
                ->getRepository(Etat::class)
                ->find('CR');
            //dump($etat);
            $ficheFrais = new Fichefrais();
            $ficheFrais->setIdvisiteur($vi);
            $ficheFrais->setMois('052021');
            $ficheFrais->setNbjustificatifs(0);
            $ficheFrais->setMontantvalide('0.0');
            $ficheFrais->setDatemodif($date2);
            $ficheFrais->setIdetat($etat);
            $doctrine->persist($ficheFrais);
            $doctrine->flush();
            return "Un nouveau mois commence";

        }
        public function creerHorsForfait($entityManager,$doctrine,$date,$libelle,$montant,$login,$dateMA){
            $repositoryObjet = $doctrine -> getRepository(Visiteur::class);
            $leVis = $repositoryObjet->findByLogin($login);
            //dump($leVis);
            $repositoryObjet = $doctrine -> getRepository(Fichefrais::class);
            $ff = $repositoryObjet->findFicheVis($date,"abc");
            //dump($entityManager);
            $date = new DateTime($date);
            $horsF = new Lignefraishorsforfait();
            $horsF->setLibelle($libelle);
            $horsF->setDate($date);
            $horsF->setMontant($montant);
            $horsF->setIdvisiteur($ff);
            $entityManager->persist($horsF);
            $entityManager->flush();
            return "Hors forfait crée";
        }
        public function verifDate($date){
            
            if(strlen($date) == 10 && substr($date, 2,1) == '/' && substr($date, 5,1) == '/'){
                $sepDate = explode("/", $date);
                dump($sepDate[2]);
                if($sepDate[2] > 1999 && $sepDate[2] < 2025){
                    if($sepDate[1] > 0 && $sepDate[1] < 13){ 
                        if($sepDate[1] == 1 || $sepDate[1] == 3 || $sepDate[1] == 5 || $sepDate[1] == 7 || $sepDate[1] == 8 || $sepDate[1] == 10 || $sepDate[1] == 12 ){
                            if($sepDate[0] > 0 && $sepDate[0] < 32){
                                return true;
                            }
                        }
                        elseif($sepDate[1] == 2){
                            if($sepDate[0] > 0 && $sepDate[0] < 29){
                                return true;
                            }
                        }
                        else{
                            if($sepDate[0] > 0 && $sepDate[0] < 31){
                                return true;
                            }
                        }
                    }
                }
            }
            return false;
        }
        function getFiche($doctrine, $mois){
            
        }
    }
?>