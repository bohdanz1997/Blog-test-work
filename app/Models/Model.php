<?php
namespace App\Models;

use App\Database\DB;

abstract class Model
{
    protected $table;

    public function __construct()
    {

    }

    public function __call( $name, $args )
    {

        if( substr( $name, 0, 3 ) === "get" ) {
            $var = lcfirst(substr($name, 3));
            return $this->$var;
        }

        if( substr( $name, 0, 3 ) === "set" ) {
            $var = lcfirst(substr($name, 3));
            $this->$var = $args[0];
        }
    }

    public function save()
    {
        $vars = get_object_vars($this);
        $strArr = [];
        foreach( $vars as $key => $var ) {
            if ($key == 'table' || !$var) {
                continue;
            }
            $strArr[] = $key . '="' . $var .'"';
            $update[$key]=$var;
        }
        $query = join(',',$strArr);

        if( !$this->getId() ) {
            DB::insert("INSERT INTO $this->table SET $query");
            $this->setId(DB::getLastId());
        }
        else {
            DB::update("UPDATE $this->table SET $query");
        }

    }

}