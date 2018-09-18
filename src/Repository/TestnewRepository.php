<?php

namespace App\Repository;

use App\Entity\Testnew;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Testnew|null find($id, $lockMode = null, $lockVersion = null)
 * @method Testnew|null findOneBy(array $criteria, array $orderBy = null)
 * @method Testnew[]    findAll()
 * @method Testnew[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestnewRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Testnew::class);
    }

//    /**
//     * @return Testnew[] Returns an array of Testnew objects
//     */
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
    public function findOneBySomeField($value): ?Testnew
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
