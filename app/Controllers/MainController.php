<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Framework\View;

class MainController extends Controller
{
    public function index()
    {
        View::show("main");
    }
}