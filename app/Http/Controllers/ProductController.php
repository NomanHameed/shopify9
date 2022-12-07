<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $shop = auth()->user();
        if (!$shop->scriptTag_id){
            $res = 'no tag';
        }else{
            $res = $shop->scriptTag_id;
        }

//        $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
        return view('welcome' , compact('res'));
    }
}
