<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller{
    public function index(){
        echo "Ini adalah halaman home";
    }

    public function about(){
        echo "Nama   : Muhammad Hilmy Iqbal<br>";
        echo "NIM    : 2041720129<br>";
        echo "Kelas  : TI 2D";
    }

    public function artikel($id){
        echo "Ini merupakan halaman ID ".$id;
    }
}
