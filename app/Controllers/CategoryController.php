<?php

namespace App\Controllers;

use App\Database\DB;
use App\Models\Category;
use App\Framework\View;

class CategoryController extends Controller
{
    public function index()
    {
        $infoCategory = DB::select('SELECT * FROM `categories`');
        View::show("categories", $infoCategory);
    }

    public function createCategory()
    {
        $category = isset($_POST['category']) ? $_POST['category'] : null;
        if ($category['name']){
            $newCategory = new Category();
            $newCategory->setName($category['name']);

            $newCategory->save();
        }
        $infoCategory = DB::select('SELECT * FROM `categories`');
        View::showAdmin('create-category', $infoCategory);
    }
}
