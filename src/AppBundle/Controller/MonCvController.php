<?php

namespace AppBundle\Controller;
use AppBundle\Entity\cvItem;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MonCvController extends Controller
{
    /**
     * @Route("/", name="homePage")
     */
    public function cvAction(Request $request)
    {
        $cvitems=$this->getDoctrine()
            ->getRepository('AppBundle:cvItem')
            -> findAll();
            foreach ($cvitems as $cvitem) {
              switch ($cvitem->gettype()) {
                    case 1:
                       $comps[]=$cvitem;
                        break;
                    case 2:
                       $notes[]=$cvitem;
                        break;
                    
                    default:
                        # code...
                        break;
                }  # code...
            }
           // replace this example code with whatever you need
        return $this->render('MonCV/index.html.twig',array('comps' => $comps,'notes'=>$notes));
    }
}
