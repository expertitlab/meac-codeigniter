<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
        echo "Liste des produits";
    }

    public function detail($id){
        // $db = \Config\Database::connect();
        $db = db_connect();
        $product = $db->query("SELECT * FROM products WHERE id = {$id}")->getRow();
        $db->close();
        $data['product'] = $product;
        return view('product_detail', $data);
    }

    public function create(){
        return view('create_product');
    }

    public function store(){

        $model = new ProductModel(); 

        if($this->request->getMethod() === 'post' && $this->validate([
            'libelle'=> 'required|min_length[3]|max_length[200]',
            'price' => 'required',
            'image' => 'uploaded[image]',
            'description' => 'required',
        ])){

            // Image 
            $file = $this->request->getFile('image');
            // $size = $file->getSize();
            $imageName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $imageName);

            $product = $model->save([
                'libelle' =>  $this->request->getPost('libelle'),
                'price' => $this->request->getPost('price'),
                'image' => WRITEPATH . 'uploads/'.$imageName,
                'description' => $this->request->getPost('description'),
            ]);

            $data['success'] = "Produit crée !";
            echo view('create_product', $data);

        }
        else{
            echo view('create_product');
        }

    }
}
