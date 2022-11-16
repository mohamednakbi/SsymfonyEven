<?php

namespace App\Repository;

use App\Entity\GategorieEvenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GategorieEvenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method GategorieEvenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method GategorieEvenement[]    findAll()
 * @method GategorieEvenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GategorieEvenementRepo extends ServiceEntityRepository
{



    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GategorieEvenement::class);
    }





    
}
