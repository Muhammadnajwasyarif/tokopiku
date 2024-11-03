<?php

namespace App\Models;
use CodeIgniter\Model;

class keranjang extends Model
{
    protected $table      = 'beli';
    public function getKeranjang($id = false)
    {
        if($id==false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id'=>$id]);
        }
    }

    public function jumlah()
    {
        return $this->db->table('beli')->countAll();
    }

    public function getTotal()
    {
        return $this->selectSum('total')->first();
    }

    public function savebeli($data)
    {
        $builder= $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function hapusKeranjang($id)
    {
        $builder= $this->db->table($this->table);
        return $builder->delete(where: ['id'=>$id]);
    }

    public function editK($data,$id)
    {
        $builder = $this->db->table($this->table);
        return $builder->update($data);
    }
}