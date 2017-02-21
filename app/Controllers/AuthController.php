<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Database\DB;
use App\Models\User;
use App\Auth\Auth;
use App\Framework\View;

class AuthController extends Controller
{
    public function login()
    {
        $postForm = isset($_POST['login']) ? $_POST['login'] : null;
            if ($postForm){
                $checkLogin = Auth::login($postForm);
                if ($checkLogin){
                    header('location: /');
                    exit();
                }
            }
        View::show('login');
    }

    public function registration()
    {
        $postForm = isset($_POST['reg']) ? $_POST['reg'] : null;
        if ($postForm){

            $user = new User();
            $user->setName($postForm['name']);
            $user->setEmail($postForm['email']);
            $user->setPassword(md5($postForm['password']));
            $user->setRole('user');

            $checkValid = $user->isValid();

            $checkUnique = Auth::isAvailableEmail($postForm['email']);
            if ($checkValid && $checkUnique){
                Auth::register($user);
                header('location: /');
                exit();
            }
            else echo "not valid";
        }
        View::show('registration');
    }

    public function logout()
    {
        Auth::logout();
        header('location: /login');
        exit();
    }

}
