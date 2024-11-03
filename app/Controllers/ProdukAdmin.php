<?php


namespace App\Controllers;
use App\Models\produkmodel;

class ProdukAdmin extends BaseController
{

    protected $modalProduk;
    public function index(): string
    {
        $this->modalProduk = new produkmodel();
        $data['produk'] = $this->modalProduk->getProduk();

        return view('coza/backend/examples/produk',$data);
    }

}
