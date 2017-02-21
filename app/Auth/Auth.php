<?php
namespace App\Auth;

use \Exception;
use App\Database\DB;
use App\Models\User;

class Auth
{
    public static $user;

    public static function login( Array $credentials )
    {
        $credentials['email'] ;
        $credentials['pass'];

        $arguments = [$credentials['email'],md5($credentials['pass'])];

        $userInfo = DB::select("SELECT * FROM users WHERE `email` =? AND `password` = ?", $arguments);
        if (!empty($userInfo)) {
            $res = $userInfo[0];
            $_SESSION['user_id'] = $res['id'];
            $_SESSION['user_role'] = $res['role'];

            return true;
        }
        else return false;

    }
    public static function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_role']);
    }

    public static function register( User $user )
    {
        $user->save();
    }

    public static function getUserRole()
    {
       return isset( $_SESSION['user_role']) ? $_SESSION['user_role'] : '';
    }

    public static function isAvailableEmail($argument)
    {
        $check = DB::select("SELECT * FROM users WHERE `email` ='{$argument}'");
        if ($check){
            return false;
        }
        else return true;
    }
    
}