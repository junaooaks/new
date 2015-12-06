<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
       $em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
       $repo = $em->getRepository("Application\Entity\Categoria");
        
      
       //pega o retorno do banco de dados
       $categorias = $repo->findAll();
       
        return new ViewModel(array('categorias'=>$categorias));
        //return new ViewModel();
    }
}
