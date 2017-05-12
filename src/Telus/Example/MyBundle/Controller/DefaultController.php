<?php

namespace Telus\Example\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TelusExampleMyBundle:Default:index.html.twig');//, array('name' => $name));
    }
}
