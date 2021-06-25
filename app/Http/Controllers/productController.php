<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produit;

class productController extends Controller
{
    //
    function  fetchProducts()
    {
        $data= produit::all();

        return view('welcome',['products'=>$data]);
    }
}
