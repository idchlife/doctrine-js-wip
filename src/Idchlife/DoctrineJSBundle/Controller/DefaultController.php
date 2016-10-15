<?php

namespace Idchlife\DoctrineJSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DoctrineJSBundle:Default:index.html.twig');
    }
}
