<?php

namespace APNet\Bundle\APMetronicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APMetronicBundle:Default:index.html.twig');
    }
}
