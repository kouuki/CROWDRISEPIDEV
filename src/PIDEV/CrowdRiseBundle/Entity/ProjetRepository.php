<?php

    namespace PIDEV\CrowdRiseBundle\Entity;
    use Doctrine\ORM\Mapping as ORM;
    use Doctrine\ORM\EntityRepository;

class ProjetRepository extends EntityRepository{

    public function search() {
        $query = $this->createQueryBuilder('PIDEVCrowdRiseBundle:Media')
                ->select('a.idProjet,a.titre,a.description,PIDEVCrowdRiseBundle:Categorie.nom,a.typeFinancement,a.dateProjet,a.deadlineProjet,a.videoProjet,m.path')
                ->distinct()
                ->from('PIDEVCrowdRiseBundle:Projet', 'a')
                ->join('a.idcat', 'PIDEVCrowdRiseBundle:Categorie')
                ->join('a.imageProjet', 'm');
        return $query->getQuery()->getResult();
    }

}
