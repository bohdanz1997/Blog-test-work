<?php

namespace App\Models;

use App\Database\DB;
use App\Models\Model;

class Article extends Model
{
   protected $table="articles";
   protected $id, $title, $text, $description, $image, $author_id, $category_id, $created_at;

    public static function getById($id)
    {
       return DB::select("SELECT * FROM `articles` WHERE `id`='{$id}'");
    }

    public static function savePhoto()
    {
        if ($_FILES['picture']['name']){
            $path = SITE_ROOT."/images/";
            if (opendir($path)) {
                $strName =time()."-".$_FILES['picture']['name'];
                $uploadFile = $path . $strName;
                if (is_uploaded_file($_FILES['picture']['tmp_name'])) {
                    if (copy($_FILES['picture']['tmp_name'], $uploadFile)) {
                        return "/images/" . $strName;
                    }
                }
            }
        } else return "/images/default.jpg";

    }
}