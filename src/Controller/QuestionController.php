<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Woa first page, nice');
    }
    /**
     * @Route("/question/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Tie them with your hands stupid! "%s"',
        ucwords(str_replace('-', ' ', $slug))
    ));
    }
}