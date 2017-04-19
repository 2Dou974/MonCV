<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact_create")
     */
    public function createAction(Request $request)
    {
            // replace this example code with whatever you need
        return $this->render('Contact/create.html.twig');
    }
}
