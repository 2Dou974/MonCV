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
                    case 1://Compétences
                       $comps[]=$cvitem;
                        break;
                    case 2://Compétences Technique
                       $notes[]=$cvitem;
                        break;
                    case 3://Centres d'intérêts
                       $leasures[]=$cvitem;
                        break;
                    case 4://languages
                        $languages[]=$cvitem;
                        break;
                    case 5://Expériences professionnelles
                        $xp[]=$cvitem;
                        break;
                     case 6://formation
                        $studies[]=$cvitem;
                        break;
                    default:
                        # code...
                        break;
                }  # code...
            }
           // replace this example code with whatever you need
        return $this->render('MonCV/index.html.twig',array('comps' => $comps,'notes'=>$notes,'leasures'=>$leasures,'languages'=>$languages,'xp'=>$xp,'studies'=>$studies));
    }
}
