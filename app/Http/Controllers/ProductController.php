<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
       
        return view('index');
    }

    public function show($id)
    {
       return view('product-detail');
    }
}
