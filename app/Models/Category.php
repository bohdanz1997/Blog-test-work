<?php

namespace App\Models;

use App\Models\Model;

class Category extends Model
{
    protected $table='categories';
    public $id, $name;
}