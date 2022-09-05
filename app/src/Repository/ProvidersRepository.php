<?php

namespace App\Repository;

use App\Entity\Providers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Providers>
 *
 * @method Providers|null find($id, $lockMode = null, $lockVersion = null)
 * @method Providers|null findOneBy(array $criteria, array $orderBy = null)
 * @method Providers[]    findAll()
 * @method Providers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProvidersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Providers::class);
    }

    public function add(Providers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function remove(Providers $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    /**
     * @Param $search String
     * @return Array
     */
    public function findByProviderName($search='')
    {
        $tagQuery = $this->createQueryBuilder('p');
        if($search){
          $tagQuery =  $tagQuery->where("p.provider_name like '%$search%'");
        }
        $tagQuery =$tagQuery->orderBy('p.id','DESC')
        // returns an array of Tag objects
         ->setMaxResults(5)
         ->getQuery()
         ->getArrayResult();
         return $tagQuery;
    }
    /**
     * @return Array
     */
    public function findAllProviders()
    {
        $qb = $this->createQueryBuilder('p');
        $query = $qb->getQuery()->getArrayResult();
        return $query;
    }

}
