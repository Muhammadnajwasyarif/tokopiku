<?php

namespace App\Models;
use CodeIgniter\Model;

class produkmodel extends Model
{
    protected $table      = 'produk';
    protected $useTimestamps = true;
    public function getProduk($id = false)
    {
        if($id==false){
            return $this->findAll();
        } else {
            return $this->getWhere(['slug'=>$id]);
        }
    }
    public function Tambah($id = false)
    {
        if($id==false){
            return $this->findAll();
        } else {
            return $this->getWhere(['slug'=>$id]);
        }
    }
}