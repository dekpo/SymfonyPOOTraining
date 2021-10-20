<?php

namespace App\Repository;

use App\Entity\Usder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Usder|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usder|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usder[]    findAll()
 * @method Usder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usder::class);
    }

    // /**
    //  * @return Usder[] Returns an array of Usder objects
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
    public function findOneBySomeField($value): ?Usder
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
