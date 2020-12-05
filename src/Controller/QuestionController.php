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
        $answers = [
            'Make sure your cat is sitting perfectly',
            'I dont know what to do anymore',
            'just dont panic, ok?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);
    }

}