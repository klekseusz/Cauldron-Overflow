<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", name="app_comment", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        // todo use id to query database
        if($direction === 'up') {
            $currentVoteCount = rand(7,100);
            $logger->info('Voting up ' . $currentVoteCount);
        }else{
            $currentVoteCount = rand(0,5);
            $logger->info('Voting down ' . $currentVoteCount);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}