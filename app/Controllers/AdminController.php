<?php
namespace App\Controllers;

use App\Database\DB;
use App\Framework\View;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        View::showAdmin('admin');
    }

    public function comments()
    {
        $comment = isset($_POST['comment']) ? $_POST['comment'] : null;
        if ($comment) {
            $id = $comment['id'];
            $status = $comment['status'];
            DB::update("UPDATE `comments` SET `status` = {$status} WHERE `comments`.`id` = {$id}");
        }
        $comments = DB::select("SELECT c.id,c.text, u.name, a.title, c.status, c.`created_at` FROM `comments` as c
                    INNER JOIN users as u 
                    ON u.id = c.`user_id`
                    INNER JOIN articles as a 
                    ON a.id = article_id
                    ORDER BY c.created_at DESC");
        View::showAdmin('comments', $comments);
    }

}