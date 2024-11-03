<?php

namespace App\Models;
use CodeIgniter\Model;

class user extends Model
{
    protected $table      = 'users';
    protected $useTimestamps = true;
    public function getUser($id = false)
    {
        if($id==false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id'=>$id]);
        }
    }
    
    public function hapusUser($id)
    {
        $builder= $this->db->table($this->table);
        return $builder->delete(['id'=>$id]);
    }


}
