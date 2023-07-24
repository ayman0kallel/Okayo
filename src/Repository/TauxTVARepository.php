<?php

namespace App\Repository;

use App\Entity\TauxTVA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TauxTVA>
 *
 * @method TauxTVA|null find($id, $lockMode = null, $lockVersion = null)
 * @method TauxTVA|null findOneBy(array $criteria, array $orderBy = null)
 * @method TauxTVA[]    findAll()
 * @method TauxTVA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TauxTVARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TauxTVA::class);
    }

//    /**
//     * @return TauxTVA[] Returns an array of TauxTVA objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TauxTVA
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
