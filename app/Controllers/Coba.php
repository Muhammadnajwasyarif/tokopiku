<?php

namespace App\Controllers;

use App\Models\produkmodel;
use App\Models\keranjang;
use App\Models\login;
use App\Models\user;

class Coba extends BaseController
{

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

    public function admin()
    {
        return view('dashboard');
    }

    
    public function tambahprod()
    {
        return view('tambahprdk');
    }

    public function produkback()
    {
        $model = new produkmodel;
        $data = array(
            'getProduk'=>$model->getProduk(),
        );
        return view('listproduk',$data);
    }

    public function user()
    {
        $model = new user;
        $data = array(
            'getUser'=>$model->getUser(),
        );
        return view('listuser',$data);
    }

    public function addpro()
    {
        $this->produkModel = new produkmodel();

        // Validasi file
        if (!$this->validate([
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                'max_size[image,4096]', // max 4MB
            ],
        ])) {
            return redirect()->back()->with('error', 'Invalid file.');
        }

        // Mengambil file dan mengubah namanya
        $file = $this->request->getFile('image');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/images', $newName);
        // Menyiapkan data untuk disimpan
        $data = array(
            'id'=>$this->request->getPost('id'),
            'nama'=>$this->request->getPost('nama'),
            'slug'=>$this->request->getPost('slug'),
            'idprod'=>$this->request->getPost('idprod'),
            'warna'=>$this->request->getPost('warna'),
            'ukuran'=>$this->request->getPost('ukuran'),
            'harga'=>$this->request->getPost('harga'),
            'gambar'=>$newName,
            'kategori'=>$this->request->getPost('kategori'),
            'stok'=>$this->request->getPost('stok'),
        );

        // Menyimpan data ke database
        $this->produkModel->saveProduk($data);

        return redirect()->to(base_url('backend/produk'));
    }

    public function hapusprod($id)
    {
        $model = new produkmodel;
        $getProduk = $model->getProduk($id)->getRow();
        if(isset($getProduk))
        {
            $model->hapusProduk($id);
            echo '<script>
            alert("Produk telah dihapus");
            window.location="'.base_url('/backend/produk').'"
            </script>';
        } else {
            
        }
    }

    public function hapususer($id)
    {
        $model = new user;
        $getUser = $model->getUser($id)->getRow();
        if(isset($getUser))
        {
            $model->hapusUser($id);
            echo '<script>
            alert("User telah dihapus");
            window.location="'.base_url('/backend/user').'"
            </script>';
        } else {
            
        }
    }

    public function editPro($id)
    {
        $model = new produkmodel;
        $getProduk = $model->getProduk($id)->getRow();
        if(isset($getProduk))
        {
            $data['produk'] = $getProduk;
            $data['title'] = 'update'.$getProduk->slug;
            return view('editprdk',$data);
        } else {
            echo '<script>
            alert("ID Barang '.$id.' tidak ditemukan di keranjang belanja anda");
            window.location="'.base_url('/backend/produk').'"
            </script>';
        }
    }

    public function updateProd()
    {
        $this->produkModel = new produkmodel();
        $id = $this->request->getPost('slug');
        // Validasi file
        if (!$this->validate([
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                'max_size[image,4096]', // max 4MB
            ],
        ])) {
            return redirect()->back()->with('error', 'Invalid file.');
        }

        // Mengambil file dan mengubah namanya
        $file = $this->request->getFile('image');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/images', $newName);
        // Menyiapkan data untuk disimpan
        $data = array(
            'id'=>$this->request->getPost('id'),
            'nama'=>$this->request->getPost('nama'),
            'slug'=>$this->request->getPost('slug'),
            'idprod'=>$this->request->getPost('idprod'),
            'warna'=>$this->request->getPost('warna'),
            'ukuran'=>$this->request->getPost('ukuran'),
            'harga'=>$this->request->getPost('harga'),
            'gambar'=>$newName,
            'kategori'=>$this->request->getPost('kategori'),
            'stok'=>$this->request->getPost('stok'),
        );

        // Menyimpan data ke database
        $this->produkModel->editProduk($data,$id);

        return redirect()->to(base_url('backend/produk'));
    }

}
