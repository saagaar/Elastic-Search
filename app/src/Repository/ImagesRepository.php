<?php
namespace App\Repository;
use App\Entity\Images;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use FOS\ElasticaBundle\Manager\RepositoryManagerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * @extends ServiceEntityRepository<Images>
 *
 * @method Images|null find($id, $lockMode = null, $lockVersion = null)
 * @method Images|null findOneBy(array $criteria, array $orderBy = null)
 * @method Images[]    findAll()
 * @method Images[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImagesRepository extends ServiceEntityRepository
{
    protected $manager;
    private $perPage=10  ;
    private $serializer;
    public function __construct(ManagerRegistry $registry,RepositoryManagerInterface $manager,SerializerInterface $serializer)
    {
        parent::__construct($registry, Images::class);
         $this->container = new ContainerBuilder();
         $this->manager=$manager;   
         $this->serializer=$serializer;
    }

    public function add(Images $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Images $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    /**
    * @return Images[] Returns an array of Images objects
    */
     public function elasticSearchQuery(Request $request) {
            $finder=$this->manager->getRepository(Images::class);
            $page=($request->get('page'))?$request->get('page'):1;
            $tag=$request->get('tag');
            $boolQuery = new \Elastica\Query\BoolQuery();
            $provider=$request->get('provider');
            $tagQuery = new \Elastica\Query\SimpleQueryString($tag,['tags.tag_name']);
            $tagFuzzyQuery = new \Elastica\Query\Fuzzy('tags.tag_name',$tag);
            $providerQuery = new \Elastica\Query\Term(['provider.provider_name'=>$provider]);
            if($provider){
                $boolQuery->addMust($providerQuery);
            }
            if($tag){
                $boolQuery->addFilter($tagFuzzyQuery);
            }
            $query = new \Elastica\Query();
            $query->setQuery($boolQuery);
            $query->setSize($this->perPage);
            $query->setFrom(($page - 1) * $this->perPage);
            $result = $finder->find($boolQuery);
            $data=[];
            foreach($result as $eachResult){
                $data[]=['image'=>$eachResult->getImageName()];
            }
            return $data;
         }  

//    /**
//     * @return Images[] Returns an array of Images objects
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

//    public function findOneBySomeField($value): ?Images
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
