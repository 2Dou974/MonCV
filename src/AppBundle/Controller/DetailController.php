<?php

namespace AppBundle\Controller;
use AppBundle\Entity\cvItem;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DetailController extends Controller
{
 public function cvDetailAction(array $cvItems)
    {
        switch ($cvItems[0]->getType()) {
            case 2:
                // replace this example code with whatever you need
        return $this->render('Detail/detailNote.html.twig',array('cvItems' =>$cvItems));
                break;
            
            default:
                // replace this example code with whatever you need
        return $this->render('Detail/detail.html.twig',array('cvItems' =>$cvItems));
                break;
        }
      
    }
}
