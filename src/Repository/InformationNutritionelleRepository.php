<?php

namespace App\Repository;

use App\Entity\InformationNutritionelle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InformationNutritionelle>
 *
 * @method InformationNutritionelle|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationNutritionelle|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationNutritionelle[]    findAll()
 * @method InformationNutritionelle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationNutritionelleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformationNutritionelle::class);
    }

    public function save(InformationNutritionelle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(InformationNutritionelle $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return InformationNutritionelle[] Returns an array of InformationNutritionelle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InformationNutritionelle
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
