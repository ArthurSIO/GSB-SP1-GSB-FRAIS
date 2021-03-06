<?php

namespace App\Repository;

use App\Entity\Visiteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Visiteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Visiteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Visiteur[]    findAll()
 * @method Visiteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisiteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Visiteur::class);
    }

    // /**
    //  * @return Visiteur[] Returns an array of Visiteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    public function findByLoginAndMdp($login, $mdp)
    {
        $QueryBuilder = $this -> createQueryBuilder('v');
    
        $QueryBuilder -> where('v.login = :login')
                      ->setParameter('login', $login)
                      ->andWhere('v.mdp = :mdp')
                      ->setParameter('mdp', $mdp);
        return $QueryBuilder->getQuery() -> getResult();  
    }
    public function findByLogin($login)
    {
        $QueryBuilder = $this -> createQueryBuilder('v');
    
        $QueryBuilder -> where('v.login = :login')
                      ->setParameter('login', $login);
        return $QueryBuilder->getQuery() -> getResult();  
    }
    /*
    public function findOneBySomeField($value): ?Visiteur
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
