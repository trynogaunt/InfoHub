<?php

namespace App\Repository;

use App\Entity\AttackInfos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AttackInfos>
 *
 * @method AttackInfos|null find($id, $lockMode = null, $lockVersion = null)
 * @method AttackInfos|null findOneBy(array $criteria, array $orderBy = null)
 * @method AttackInfos[]    findAll()
 * @method AttackInfos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttackInfosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AttackInfos::class);
    }

//    /**
//     * @return AttackInfos[] Returns an array of AttackInfos objects
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

//    public function findOneBySomeField($value): ?AttackInfos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
