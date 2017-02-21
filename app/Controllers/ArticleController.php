<?php
namespace App\Controllers;

use App\Auth\Auth;
use App\Database\DB;
use App\Framework\View;
use App\Models\User;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $category = isset($_GET['category']) ? $_GET['category'] : null;
        $begin = isset($_GET['p']) ? intval($_GET['p']) : 0;

        $limit = 10;
        $row = null;
        $data = null;
        $navigation = null;

        if ($category){
            $row = DB::select("SELECT * FROM `articles`
            WHERE articles.category_id = $category
            ORDER BY `id` 
            DESC LIMIT {$begin}, {$limit}");

            $count = DB::select('SELECT COUNT(*) as `num` FROM `articles` 
                                 WHERE articles.category_id ='.$category);
            $count = $count[0]['num'];
            $pageCount = ceil($count/$limit);

            for($i=0; $i<$pageCount; $i++) {
                $navigation .= '<li><a href="/articles?p=' .($i*$limit). '&category='.$category.'">'.($i+1).'</a></li>';
            }
            $title = DB::select("SELECT `name` FROM `categories` WHERE id = $category");
            $data['title'] = $title[0]['name'];

        } else {
            $row = DB::select("SELECT * FROM `articles`
            ORDER BY `id` 
            DESC LIMIT {$begin}, {$limit}");

            $count = DB::select('SELECT COUNT(*) as `num` FROM `articles`');
            $count = $count[0]['num'];
            $pageCount = ceil($count/$limit);

            for($i=0; $i<$pageCount; $i++) {
                $navigation .= '<li><a href="/articles?p='.($i*$limit).'">'.($i+1).'</a></li>';
            }
        }

        $data['content'] = $row;
        $data['paginate'] = "<ul class='pagination'>$navigation</ul>";
        $data['count'] = $count;

        View::show('articles', $data);
    }

    public function show()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id){
            $article = Article::getById($id);
        } else return header('location: /404');
        $article['categories'] = DB::select('SELECT * FROM `categories`');
        $article = $article[0];

        $likes = DB::select("SELECT COUNT(*) as `count` FROM `likes` WHERE article_id = $id");
        $article['likes'] = $likes[0]['count'];

        $comments = DB::select('SELECT c.`text`, c.`created_at`, u.name  FROM `comments` as c
                                INNER JOIN users as u
                                ON u.`id` = c.`user_id`
                                WHERE c.`status` = ?
                                AND c.`article_id` = ?', [1,$id]);
        $article['comments'] = $comments;
        View::show('article', $article);
    }

    public function showByCategory()
    {
        $category = isset($_GET['category']) ? $_GET['category'] : null;
        $limit = 10;
        $data = null;
        $begin = isset($_GET['p'])?intval($_GET['p']):0;
        $row = DB::select("SELECT * FROM `articles`
            WHERE articles.category_id = $category;
            ORDER BY `id` 
            DESC LIMIT {$begin}, {$limit}");
        $data['content'] = $row;

        $count = DB::select('SELECT COUNT(*) as `num` FROM `articles`');
        $count = $count[0]['num'];
        $pageCount = ceil($count/$limit);

        $navigation = null;

        for($i=0; $i<$pageCount; $i++) {
            $navigation .= '<li><a href="/articles?p='.($i*$limit).'">'.($i+1).'</a></li>';
        }
        $data['paginate'] = "<ul class='pagination'>$navigation</ul>";
        $data['count'] = $count;

    }

    public function createArticle()
    {
        $article = isset($_POST['article']) ? $_POST['article'] : null;

        if ($article){

            $newArticle =  new Article();
            $newArticle->setTitle($article['title']);
            $newArticle->setText($article['text']);
            $newArticle->setDescription($article['description']);
            $newArticle->setAuthor_id($_SESSION['user_id']);
            $newArticle->setCategory_id($article['category_id']);

            $newArticle->setCreated_at(date('Y-m-d H:i:s', time()));

            $image = Article::savePhoto();
            $newArticle->setImage($image);

            $newArticle->save();
            header('location: /admin');
        }

        $infoCategory = DB::select('SELECT * FROM `categories`');
        View::showAdmin('create-article',$infoCategory);
    }

    public function like()
    {
        $id = isset($_POST['id']) ? intval($_POST['id']) : null;;
        $count = 0;
        $message = '';
        $status = '';
        $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        if($id){
            $check = DB::select("SELECT COUNT(*) AS `check` FROM `likes` WHERE `user_id` = {$userId} AND `article_id` = {$id}");

            if ($check[0]['check'] == 0){
                DB::insert("INSERT INTO `likes`(`user_id`,`article_id`) VALUES($userId,$id)");
                $status = 'add';
            } else {
                DB::delete("DELETE FROM `likes` WHERE `user_id` = {$userId} AND `article_id` = {$id}");
                $status = 'remove';
            }
            $count = DB::select("SELECT COUNT(*) as `count` FROM `likes` WHERE article_id = $id");

        }else{
            $message = 'article not found';
        }

        $out = [
            'message' => $message,
            'count' => $count[0]['count'],
            'status' => $status
        ];

        header('Content-Type: text/json; charset=utf-8');

        echo json_encode($out);
    }
}