<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sportline'
        ];
        return view('pages.home', $data);
    }

    public function products()
    {
        $data = [
            'title' => 'sportline | product',
        ];
        return view('pages.products', $data);
    }
}
