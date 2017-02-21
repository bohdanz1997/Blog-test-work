<?php
namespace App\Models;

use App\Models\Model;

class User extends Model
{
	protected $table = 'users';
	protected $id, $name, $email, $password, $role;

    public function __construct($id, $name, $email, $password, $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function isValid()
    {
        if (strlen($this->name) >= 3 && strlen($this->name) != null ) {
             if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                 if (strlen($this->password) >= 3 && strlen($this->password) != null ){
                     return true;
                 }
                 return false;
            }
            return false;
        }
        return false;
	}

}