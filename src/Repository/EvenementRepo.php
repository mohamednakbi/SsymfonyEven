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




    public function find_Nb_Rec_Par_Status($gatName){

        $em = $this->getEntityManager();

        $query = $em->createQuery(
            'SELECT DISTINCT  count(r.id) FROM   App\Entity\Evenement r  where r.gatName = :gatName'
        );
        $query->setParameter('gatName', $gatName);
        return $query->getResult();
    }






    
    public function mise_a_joure()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = '
           DELETE FROM `evenement` WHERE date_fin < CURRENT_DATE ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

                                                

    
}
