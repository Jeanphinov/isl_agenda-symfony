<?php

namespace AppBundle\Repository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function myFindAll(){
       
        
        $query = $this->_em->createQuery('SELECT c.id, c.nom  FROM AppBundle:Categorie c');
        return $query->getResult();
        
        
        
    }
}
