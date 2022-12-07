<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $shop = auth()->user();
        if (!$shop->scriptTag_id){
            $script_tags_info = [
                "script_tag" => [
                    "event" => "onload",
                    "src" => asset('assets/script.js')
                ]
            ];
            $script_tag = $shop->api()->rest('POST', '', $script_tags_info)['body']['script_tag']['id'];
            $shop->scriptTag_id = $script_tag;
            $res = $script_tag;
            $shop->save();
        }else{
            $res = $shop->scriptTag_id;
        }

//        $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
        return view('welcome' , compact('res'));
    }
}
