<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        echo 'Mutiara Devita Eka Putri/2141720135';
    }
    public function articles($id) {
        echo 'Halaman Artikel dengan Id '.$id;
    }
}
