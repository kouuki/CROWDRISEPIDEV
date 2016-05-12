<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SolutionRepository extends EntityRepository {

    public function search() {
        $query = $this->createQueryBuilder('PIDEVCrowdRiseBundle:Media')
                ->select('a.titre,a.description,PIDEVCrowdRiseBundle:Probleme.titre,m.path')
                ->distinct()
                ->from('PIDEVCrowdRiseBundle:Solution', 'a')
                ->join('a.ProblemeId', 'PIDEVCrowdRiseBundle:Probleme')
                ->join('a.fichierSolution', 'm');
        return $query->getQuery()->getResult();
    }
    
    public function findToken($passe) {
        $query = $this->getEntityManager()
                ->createQuery('SELECT m from PIDEVCrowdRiseBundle:Token m WHERE m.passe=:passe')
        ->setParameter('passe',$passe);
        return $query->getResult();
    }

}
