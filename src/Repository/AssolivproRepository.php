<?php

namespace App\Repository;

use App\Entity\Assolivpro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Assolivpro>
 *
 * @method Assolivpro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Assolivpro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Assolivpro[]    findAll()
 * @method Assolivpro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssolivproRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Assolivpro::class);
    }

//    /**
//     * @return Assolivpro[] Returns an array of Assolivpro objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Assolivpro
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
