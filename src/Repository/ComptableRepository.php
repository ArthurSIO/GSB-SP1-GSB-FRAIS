<?php

namespace App\Repository;

use App\Entity\Comptable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comptable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comptable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comptable[]    findAll()
 * @method Comptable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComptableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comptable::class);
    }

    public function findByLoginAndMdp($login, $mdp)
    {
        $QueryBuilder = $this -> createQueryBuilder('c');
    
        $QueryBuilder -> where('c.login = :login')
                      ->setParameter('login', $login)
                      ->andWhere('c.mdp = :mdp')
                      ->setParameter('mdp', $mdp);
        return $QueryBuilder->getQuery() -> getResult();  
    }
}
