<?php

namespace Cashflow\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController
 * @package Cashflow\Controller
 */
class DefaultController
{
    public function index()
    {
        return new JsonResponse(['message' => 'OK']);
    }
}
