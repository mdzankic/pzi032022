<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getProducts(Request $request) {

        $products = [
            'proizvod1', 'proizvod2'
        ];

        return $products;
    }

    public function getProduct(Request $request, $id)
    {
        dd($id);
    }
}
