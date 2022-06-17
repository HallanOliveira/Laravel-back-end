<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getProducts(){
        $teste = Products::where('status', true)->get();

        return $teste;
    }
}
