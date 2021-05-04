<?php

namespace App\Repository;

use App\Entity\Fichefrais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fichefrais|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fichefrais|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fichefrais[]    findAll()
 * @method Fichefrais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichefraisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fichefrais::class);
    }

    // /**
    //  * @return Fichefrais[] Returns an array of Fichefrais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    
     public function findFiche($mois)
    {
        $QueryBuilder = $this -> createQueryBuilder('ff');
    
        $QueryBuilder -> where('ff.mois = :mois')
                      ->setParameter('mois', $mois);
        return $QueryBuilder->getQuery() -> getResult();  
    }
    public function findFicheVis($mois,$idVisiteur)
    {
        $QueryBuilder = $this -> createQueryBuilder('ff');
    
        $QueryBuilder ->where('ff.mois = :mois')
                      ->setParameter('mois', $mois)
                      ->andWhere('ff.idvisiteur = :idvisiteur')
                      ->setParameter('idvisiteur', $idVisiteur);
        return $QueryBuilder->getQuery() -> getResult();  
    }

    /*
    public function findOneBySomeField($value): ?Fichefrais
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
