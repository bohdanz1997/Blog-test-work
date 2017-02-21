<?php
namespace App\Framework;

use \Exception;
use App\Auth\Auth;

class Routing
{

    private $routes = [];

    public static function init()
    {
        static $instance;
        if( $instance ) return $instance;

        try {
            $instance = new Routing;
        }
        catch(Exception $e) {
            echo $e->getMessage();
        }

        return $instance;
    }

    private function __construct()
    {

        try {
            include __DIR__ . '/../routes.php';
            $this->routes = $routes;
        }
        catch( Exception $e ) {
            echo $e->getMessage();
        }
    }

    public function getCurrRouteHandler()
    {
        $uriSections = explode('?', $_SERVER['REQUEST_URI']);
        $route = ( $uriSections[0] != '/' ) ? rtrim($uriSections[0],'/') : '/';

        foreach ($this->routes as $routePattern => $val) {
            if( preg_match( '/^'.addcslashes($routePattern,'/').'$/', $route) ) {

                if( $this->checkPolicy( $val ) ) {
                    return $val['handler'];
                }
                return false;
            }

        }
        return false;
    }


    private function checkPolicy( $route )
    {
        if( isset($route['policy']) ) {
            if( $route['policy'] == 'admin' ) {
                if( Auth::getUserRole() != 'admin' ) {
                    return false;
                }
            }

            if( $route['policy'] == 'user' ) {
                if( !Auth::getUserRole() ) {
                    return false;
                }
            }

        }
        return true;
    }

}