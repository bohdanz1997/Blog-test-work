<?php

namespace App\Models;

use App\Models\Model;

class Comment extends  Model
{
    protected $table="comments";
    public $id, $text, $user_id, $article_id, $created_at;

}