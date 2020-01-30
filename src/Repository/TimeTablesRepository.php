<?php

namespace App\Repository;

use App\Entity\TimeTables;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TimeTables|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimeTables|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimeTables[]    findAll()
 * @method TimeTables[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimeTablesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimeTables::class);
    }

    // /**
    //  * @return TimeTables[] Returns an array of TimeTables objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TimeTables
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
