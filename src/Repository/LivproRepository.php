<?php

namespace App\Repository;

use App\Entity\Livpro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Livpro>
 *
 * @method Livpro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Livpro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Livpro[]    findAll()
 * @method Livpro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivproRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Livpro::class);
    }

//    /**
//     * @return Livpro[] Returns an array of Livpro objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Livpro
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
