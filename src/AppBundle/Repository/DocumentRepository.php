<?php
// src/AppBundle/Repository/DocumentRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class DocumentRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Document p ORDER BY p.id ASC'
            )
            ->getResult();
    }

    public function findDocById($id){
    	return $this->getEntityManager()
    		->createQuery(
    			'SELECT f FROM AppBundle:Document f WHERE f.id = :id ORDER BY f.id ASC'
    			)
    		->setParameter('id', $id)
    		->getOneOrNullResult();

    }

    public function deleteDocById($id){

    	$query = $this->getEntityManager()
    	->getConnection()
    	->createQueryBuilder()
		->delete('Document', 's')
		->where('s.id = :id')
		->setParameter('id', $id);
		$query->execute();
    }
}