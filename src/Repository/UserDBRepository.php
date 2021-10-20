<?php

namespace App\Repository;

use App\Entity\UserDB;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserDB|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserDB|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserDB[]    findAll()
 * @method UserDB[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserDBRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserDB::class);
    }

    // /**
    //  * @return UserDB[] Returns an array of UserDB objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserDB
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
