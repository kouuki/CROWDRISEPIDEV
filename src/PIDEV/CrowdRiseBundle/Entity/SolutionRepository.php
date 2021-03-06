<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\EntityRepository;


/**
 * ProblemeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SolutionRepository extends EntityRepository
{
     public function afficher($id) {

        $query = $this->createQueryBuilder('PIDEVCrowdRiseBundle:Media')
                ->select('s.idSolution,s.titre,s.description,s.fichierSolution')
                ->distinct()
                ->from('PIDEVCrowdRiseBundle:Solution', 's')
               
                ->where('s.ProblemeId=:id')
                ->andWhere("s.etat='en attente'")
                ->setParameter('id', $id);
        return $query->getQuery()->getResult();
    }

   public function accepter($idSolution) {
        $query = $this->getEntityManager()
                ->createQuery("UPDATE PIDEVCrowdRiseBundle:Solution s SET s.etat = 'Accepté' WHERE s.idSolution=:idSolution ");
        
        $query->setParameter('idSolution', $idSolution);
        
       
        $query->execute();
    }
     public function refuser($idSolution) {
        $query = $this->getEntityManager()
                ->createQuery("Update PIDEVCrowdRiseBundle:Solution c SET c.etat='Refuser' where c.idSolution=:idSolution ");
        
        $query->setParameter('idSolution', $idSolution);
        
       
        $query->execute();
    }
    public function afficherAccepter() {

        $query = $this->createQueryBuilder('PIDEVCrowdRiseBundle:Probleme')
                ->select('s.idSolution,s.titre,s.description')
                ->distinct()

                ->from('PIDEVCrowdRiseBundle:Solution', 's')
               
                ->where("s.etat = 'Accepté'");
        return $query->getQuery()->getResult();
    }
    public function afficherRefuser() {

        $query = $this->createQueryBuilder('PIDEVCrowdRiseBundle:Media')
                ->select('s.idSolution,s.titre,s.description')
                ->distinct()
                ->from('PIDEVCrowdRiseBundle:Solution', 's')
               
                ->where("s.etat=  'Refuser'");
        return $query->getQuery()->getResult();
    }
  

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
