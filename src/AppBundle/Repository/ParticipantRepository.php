<?php

namespace AppBundle\Repository;

/**
 * ParticipantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParticipantRepository extends \Doctrine\ORM\EntityRepository
{
    
     public function myFindAll(){
       
        
        $query = $this->_em->createQuery('SELECT p.id, p.nom, p.prenom   FROM AppBundle:Participant p');
        return $query->getResult();
        
        
        
    }
}
