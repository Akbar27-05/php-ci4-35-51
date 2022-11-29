<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Kategori_M;


class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Belajar ci4";
    }

    public function read()
    {
        $pager = \Config\Services::pager();
        $model = new Kategori_M();
        //$kategori = $model ->findAll();

        $data = [
            'judul' => 'DATA KATEGORI',
            //'kategori' => $kategori,
            'kategori' => $model->paginate(3,'page'),
            'pager' => $model->pager
        ];

        return view("kategori/select",$data);

    }

    public function create(){
        
        return view("kategori/insert");
        
    }

    public function insert(){

        $model = new Kategori_M();
        
        if ($model -> insert($_POST) === false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url('/admin/kategori/create'));
        }else {
            return redirect()->to(base_url('/admin/kategori'));
        }
    }

    public function find($id=null){
        $model = new Kategori_M();
        $kategori = $model ->find($id);

        $data = [
            'judul' => 'UPDATE DATA',
            'kategori' => $kategori
        ];

        return view("Kategori/update"
        ,$data);
    }

    public function update(){
        $model = new Kategori_M();
        $id = $_POST['idkategori'];
        
        if ($model -> save($_POST)===false) {
            $error = $model->errors();
            session()->setFlashdata('info', $error['kategori']);
            return redirect()->to(base_url("/admin/kategori/find/$id"));
        }else {
            return redirect()->to(base_url('/admin/kategori'));
        }
    }

    public function delete($id=null){

        $model = new Kategori_M();
        $model -> delete($id);

        return redirect()->to(base_url('/admin/kategori')); //untuk kembali ke halaman utama
    }
}
