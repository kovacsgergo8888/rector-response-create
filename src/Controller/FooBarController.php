<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooBarController extends AbstractController
{
    #[Route(path: '/foo', name: 'foo')]
    public function fooBar(): JsonResponse
    {
        //$checkIfRectorWorking = $this->getDoctrine();
        return JsonResponse::create(['foo' => 'bar']);
    }

    #[Route(path:'/bar', name: 'bar')]
    public function barFoo(): Response
    {
        return Response::create('This won\'t be supported');
    }
}