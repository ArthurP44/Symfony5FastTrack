<?php

namespace App;

use App\Entity\Comment;

class SpamChecker
{
    public function getSpamScore(Comment $comment, array $context): int
    {
        if (strpos($comment->getText(), 'spam') !== false) {
            return 1;
        } else {
            return 0;
        }
    }
}