<?php

namespace App\Repository;

use App\Entity\Begraafplaats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Begraafplaats|null find($id, $lockMode = null, $lockVersion = null)
 * @method Begraafplaats|null findOneBy(array $criteria, array $orderBy = null)
 * @method Begraafplaats[]    findAll()
 * @method Begraafplaats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BegraafplaatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Begraafplaats::class);
    }

    // /**
    //  * @return Begraafplaats[] Returns an array of Begraafplaats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Begraafplaats
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
