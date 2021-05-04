<?php

namespace App\Repository;

use App\Entity\LigneFraisForfait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LigneFraisForfait|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneFraisForfait|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneFraisForfait[]    findAll()
 * @method LigneFraisForfait[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneFraisForfaitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneFraisForfait::class);
    }

    // /**
    //  * @return LigneFraisForfait[] Returns an array of Lignefraisforfait objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    public function findByLFicheFrais($mois)
    {
        return $this -> createQueryBuilder('l')
                     -> Join( 'l.idFraisForfait','f' )
                     -> addSelect('f')
                     -> Join( 'l.idvisiteur','ff' )
                     -> addSelect('ff')
                     -> where('ff.mois = :mois')
                     ->setParameter('mois', $mois)
                     ->getQuery()
                     -> getResult();
    }
    public function findByLFicheFraisVis($mois,$idVisiteur)
    {
        return $this -> createQueryBuilder('l')
                     -> Join( 'l.idFraisForfait','f' )
                     -> addSelect('f')
                     -> Join( 'l.idvisiteur','ff' )
                     -> addSelect('ff')
                     -> where('ff.mois = :mois')
                     ->setParameter('mois', $mois)
                     ->andWhere('ff.idvisiteur = :idvisiteur')
                     ->setParameter('idvisiteur', $idVisiteur)
                     ->getQuery()
                     -> getResult();
    }
    /*
    public function findOneBySomeField($value): ?Lignefraisforfait
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
