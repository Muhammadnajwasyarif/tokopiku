<?php

namespace App\Controllers;

use App\Models\produkmodel;
use App\Models\keranjang;
use App\Models\login;
use App\Models\pelanggan;

class Coba extends BaseController
{
    protected $session;

    public function index()
    {
        $model = new produkmodel;
        $model1 = new keranjang;
        $total = $model1->getTotal();
        $data = array(
            'getProduk'=>$model->getProduk(),
            'getKeranjang'=>$model1->getKeranjang(),
            'jumlah'=>$model1->jumlah(),
            'total' => $total['total'],
        );
        return view('index',$data);
    }
    

    public function produk()
    {
        $model = new produkmodel;
        $model1 = new keranjang;
        $total = $model1->getTotal();
        $data = array(
            'getProduk'=>$model->getProduk(),
            'getKeranjang'=>$model1->getKeranjang(),
            'jumlah'=>$model1->jumlah(),
            'total' => $total['total'],
        );
        return view('produk',$data);
    }

    public function fitur()
    {
        $model = new produkmodel;
        $model1 = new keranjang;
        $total = $model1->getTotal();
        $data = array(
            'getProduk'=>$model->getProduk(),
            'getKeranjang'=>$model1->getKeranjang(),
            'jumlah'=>$model1->jumlah(),
            'total' => $total['total'],
        );
        return view('fitur',$data);
    }

    public function login()
    {
        $model = new login;
        $data['getLogin']=$model->getLogin();
        return view('login',$data);
    }

    public function detail($id)
    {
        $model = new produkmodel;
        $getProduk = $model->getProduk($id)->getRow();
        if(isset($getProduk))
        {
            $data['produk'] = $getProduk;
            $data['title'] = 'edit'.$getProduk->nama;
            return view('detailprod',$data);
        }
    }

    public function edit($id)
    {
        $model = new keranjang;
        $getKeranjang = $model->getKeranjang($id)->getRow();
        if(isset($getKeranjang))
        {
            $data['beli'] = $getKeranjang;
            $data['title'] = 'update'.$getKeranjang->id;
            return view('updateproduk',$data);
        } else {
            echo '<script>
            alert("ID Barang '.$id.' tidak ditemukan di keranjang belanja anda");
            window.location="'.base_url('/fitur').'"
            </script>';
        }
    }

    public function update()
    {
        $model = new keranjang;
        $id = $this->request->getPost('idprod');
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $total = $harga * $jumlah; 
        $data = array(
            
            'id'=> $this->request->getPost('idprod'),
            'harga'=>$this->request->getPost('harga'),
            'jumlah'=>$this->request->getPost('jumlah'),
            'total'=>$total
        );
        $model->editK($data,$id);
        echo '<script>
        alert("Sukses mengedit keranjang belanja anda");
        window.location="'.base_url('/fitur').'"
        </script>';
    }

    public function beli()
    {
        $model = new keranjang;
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $total = $harga * $jumlah; 
        $data = array(
            'user'=>$this->request->getPost('id'),
            'produk'=>$this->request->getPost('nama'),
            'ukuran'=>$this->request->getPost('ukuran'),
            'warna'=>$this->request->getPost('warna'),
            'images'=>$this->request->getPost('image'),
            'idprod'=>$this->request->getPost('idprod'),
            'harga'=>$this->request->getPost('harga'),
            'jumlah'=>$this->request->getPost('jumlah'),
            'kategori'=>$this->request->getPost('kategori'),
            'total'=>$total
        );
        $model->savebeli($data);
        echo '<script>
        alert("Telah ditambahkan ke keranjang belanja anda");
        window.location="'.base_url('/').'"
        </script>';
    }

    public function tambah()
    {
        $model = new keranjang;
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $total = $harga * $jumlah; 
        $data = array(
            'user'=>$this->request->getPost('id'),
            'produk'=>$this->request->getPost('nama'),
            'ukuran'=>$this->request->getPost('ukuran'),
            'warna'=>$this->request->getPost('warna'),
            'images'=>$this->request->getPost('image'),
            'idprod'=>$this->request->getPost('idprod'),
            'harga'=>$this->request->getPost('harga'),
            'jumlah'=>$this->request->getPost('jumlah'),
            'kategori'=>$this->request->getPost('kategori'),
            'total'=>$total
        );
        $model->savebeli($data);
        echo '<script>
        alert("Telah ditambahkan ke keranjang belanja anda");
        window.location="'.base_url('/produk').'"
        </script>';
    }

    public function add()
    {
        $model = new keranjang;
        $harga = $this->request->getPost('harga');
        $jumlah = $this->request->getPost('jumlah');
        $total = $harga * $jumlah; 
        $data = array(
            'user'=>$this->request->getPost('id'),
            'produk'=>$this->request->getPost('nama'),
            'ukuran'=>$this->request->getPost('ukuran'),
            'warna'=>$this->request->getPost('warna'),
            'images'=>$this->request->getPost('image'),
            'idprod'=>$this->request->getPost('idprod'),
            'harga'=>$this->request->getPost('harga'),
            'jumlah'=>$this->request->getPost('jumlah'),
            'kategori'=>$this->request->getPost('kategori'),
            'total'=>$total
        );
        $model->savebeli($data);
        echo '<script>
        alert("Telah ditambahkan ke keranjang belanja anda");
        window.location="'.base_url('/fitur').'"
        </script>';
    }

    public function hapus($id)
    {
        $model = new keranjang;
        $getKeranjang = $model->getKeranjang($id)->getRow();
        if(isset($getKeranjang))
        {
            $model->hapusKeranjang($id);
            echo '<script>
            alert("Barang belanja anda telah dihapus dari keranjang belanja anda");
            window.location="'.base_url('/fitur').'"
            </script>';
        } else {
            
        }
    }



    public function user($id)
    {
        $model = new pelanggan;
        $getUser = $model->getUser($id)->getRow();
        if(isset($getUser))
        {
            $data['users'] = $getUser;
            $data['title'] = 'edit'.$getUser->id;
            return view('usere',$data);
        }
    }

    public function user2($id = null)
    {
        $this->session = session();
        $id = $this->session->get('id');

        $model = new pelanggan;
        $getUser = $model->getUser2($id);
        $data['users'] = $getUser;

        return view('usere',$data);
        
    }

//     public function user2()
// {
//     $this->session = session();

//     // Mengambil user_id dari session
//     $userId = $this->session->get('user_id');

//     if (!$userId) {
//         return redirect()->to('/login'); // Jika tidak ada user ID, redirect ke halaman login
//     }

//     $model = new pelanggan();
//     $getUser = $model->getUser2($userId); // Ambil data pengguna berdasarkan ID

//     if (!$getUser) {
//         // Tindakan jika tidak ada data pengguna ditemukan
//         return redirect()->to('/dashboard')->with('error', 'Pengguna tidak ditemukan');
//     }

//     $data['users'] = $getUser;

//     return view('usere', $data);
// }


}
