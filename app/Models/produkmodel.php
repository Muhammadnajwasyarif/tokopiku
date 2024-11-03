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

    public function saveProduk($data)
    {
        $builder= $this->db->table($this->table);
        return $builder->insert($data);
    }

    
    public function hapusProduk($id)
    {
        $builder= $this->db->table($this->table);
        return $builder->delete(['slug'=>$id]);
    }

    public function editProduk($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('slug',$id);
        return $builder->update($data);
    }

}
