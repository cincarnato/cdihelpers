<?php

namespace CdiHelpers\Controller;

use Zend\Mvc\Controller\AbstractActionController;


class SlidersController extends AbstractActionController {


    /**
     * @var Doctrine\ORM\EntityManager
     */
    protected $em;

    public function setEntityManager(EntityManager $em) {
        $this->em = $em;
    }

    public function getEntityManager() {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }
    
    
    


}
