<?php

namespace Idchlife\DoctrineJSBundle\Service\RepositoryService;
use Doctrine\Common\Persistence\ObjectManager;
use Idchlife\DoctrineJSBundle\Service\RepositoryService\Exception\MethodNotFoundInRepositoryException;

/**
 * Created by PhpStorm.
 * User: igorandreev
 * Date: 15/10/16
 * Time: 20:06
 */
class RepositoryService
{
    /**
     * @var ObjectManager
     */
    private $om;

    public function requestDataFromRepository($repositoryName, $methodName, array $params = [])
    {
        $repository = $this->om->getRepository($repositoryName);

        if (!method_exists($repository, $methodName)) {
            throw new MethodNotFoundInRepositoryException();
        }

        $data = call_user_func_array([$repository, $methodName], $params);

        return $data;
    }
}
