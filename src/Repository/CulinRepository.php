<?php

namespace App\Repository;

use App\Entity\Culin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Culin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Culin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Culin[]    findAll()
 * @method Culin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CulinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Culin::class);
    }

    // /**
    //  * @return Culin[] Returns an array of Culin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Culin
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}