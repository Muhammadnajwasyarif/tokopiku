<?php

namespace App\Models;
use CodeIgniter\Model;

class login extends Model
{
    protected $table      = 'login';
    public function getLogin($id = false)
    {
        if($id==false){
            return $this->findAll();
        } else {
            return $this->getWhere(['username'=>$id]);
        }
    }
}