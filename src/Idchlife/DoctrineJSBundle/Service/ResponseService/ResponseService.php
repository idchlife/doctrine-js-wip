<?php

namespace Idchlife\DoctrineJSBundle\Service\ResponseService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Created by PhpStorm.
 * User: igorandreev
 * Date: 15/10/16
 * Time: 20:06
 */
class ResponseService
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function createSerializedResponse($data)
    {
        return new JsonResponse($this->serializer->serialize($data, 'json'), 200, [], true);
    }

    public function createErrorResponse($status = 400, $message = '[DoctrineJSBundle]: error')
    {
        return new JsonResponse(['error' => $message], $status);
    }
}
