<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CovertechdesignAdminBundle:Default:index.html.twig', array('name' => "asd"));
    }
}
