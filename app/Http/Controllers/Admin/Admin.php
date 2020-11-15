<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Sportline | dashboard'
        ];
        return view('pages.admin.dashboard', $data);
    }
}
