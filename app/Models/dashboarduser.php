<?php

namespace App\Models;
use CodeIgniter\Model;

class pelanggan extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['id','email','username','fullname','password_hash'];

    public function getUser($id = false)
    {
        if($id==false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id'=>$id]);
        }
    }

    public function getUser2($id){
        return $this->where(['id' => $id])->first();
    }
    
}
?>