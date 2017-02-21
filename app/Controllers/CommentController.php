<?php

namespace App\Controllers;

use App\Models\Comment;
use App\Database\DB;
use App\Framework\View;


class CommentController
{
    public function create()
    {
        $comment = isset($_POST['comment']) ? $_POST['comment'] : null;
        $articleId = isset($_POST['comment']['id']) ? $_POST['comment']['id'] : null;
        if (!empty($comment['text'])){
            $text = $comment['text'];
            $text = htmlspecialchars(rtrim($text));

            $newComment = new Comment();
            $newComment->setText($text);
            $newComment->setUser_id($_SESSION['user_id']);
            $newComment->setArticle_id($comment['id']);
            $newComment->setStatus(0);
            $newComment->setCreated_at(date('Y-m-d H:i:s', time()));

            $newComment->save();
            header("Location: /article?id=$articleId");
            exit();
        }

        View::show("comment");
    }

}
