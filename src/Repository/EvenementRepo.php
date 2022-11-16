<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EvenementRepo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EvenementRepo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EvenementRepo[]    findAll()
 * @method EvenementRepo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepo extends ServiceEntityRepository
{

    

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }





    
}
