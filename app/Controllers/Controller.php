<?php
namespace App\Controllers;

abstract class Controller
{
    protected $db;
    protected $config;

    public function __construct( $config, $db )
    {
        $this->db = $db;
        $this->config = $config;
    }

}