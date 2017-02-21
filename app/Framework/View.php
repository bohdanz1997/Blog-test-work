<?php
namespace App\Framework;

use App\Database\DB;

class View
{

    public static function show( $templateName, $data = [] )
    {

        include 'app/Views/layouts/header.html.php';
        try {
            include 'app/Views/'.$templateName.'.html.php';
        }
        catch( Exception $e ) {
            echo $e->getMessage();
        }
        include 'app/Views/layouts/footer.html.php';
    }

    public static function showAdmin( $templateName, $data = [] )
    {
        include 'app/Views/admin/header.html.php';
        try {
            include 'app/Views/admin/'.$templateName.'.html.php';
        }
        catch( Exception $e ) {
            echo $e->getMessage();
        }
        include 'app/Views/admin/footer.html.php';
    }

}