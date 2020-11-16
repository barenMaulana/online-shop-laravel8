<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
            'products' => Product::all()
        ];
        return view('pages.products', $data);
    }
}
