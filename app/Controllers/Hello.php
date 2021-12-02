<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        return view('hello');
    }

    public function geekl($age){
        echo "Hello geekl. Votre âge est $age";
    }
}
