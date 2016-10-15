<?php

namespace Idchlife\DoctrineJSBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/repository")
 *
 * Class RepositoryController
 * @package Idchlife\DoctrineJSBundle\Controller
 */
class RepositoryController extends Controller
{
    /**
     * @Route("/{method}")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function requestDataAction($method)
    {
        $service = $this->get('repository_service');

//        $data = $service->

        return new Response();
    }
}
