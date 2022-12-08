<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $shop = auth()->user();
        $script_tag_info = [
          "script_tag" => [
              "event" => "onload",
              "src" => asset('assets/script.js')
          ]
        ];
        $themes = $shop->api()->rest('GET', '/admin/api/2022-01/themes.json');
//        $scripts = $shop->api()->rest('GET', '/admin/api/2022-10/script_tags.json');
        $themes = $themes['body']['themes'];
        dd($themes);
//        $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
        foreach ($themes  as $theme){
            dd($theme);
            if($theme->role == 'main'){
                $active_theme = $theme;
            }
        }
//        $data_to_put = [
//            'asset' => [
//                "key" => 'snippets/wixpa.liquid',
//                "value" => "<style>button[name=add]{display: none !important;}</style>"
//            ]
//        ];
//        $snippet = $shop->api()->rest('PUT', '/admin/api/2022-10/themes/'.$active_theme->id.'/assets.json', $data_to_put);
        $this->include_snippet($active_theme->id, $shop);
//        $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
        return view('welcome');
    }

    public function include_snippet($active_theme_id, $shop)
    {
        $html = $shop->api()->rest('GET', '/admin/api/2022-10/themes/'.$active_theme_id.'/assets.json', ['asset[key]' => 'layout/theme.liquid'])['body']['asset']['value'];
        $app_include = "{% comment %} // btnhider start {% endcomment %}"."\n {% capture snippet_content %} \n {% include '".'wixpa.liquid'."' %} \n {% endcapture %} \n
        {% comment %} // btnhider end {% endcomment %}";
        if(strpos($html, '{% comment %}//btnhider start {% endcomment %}') === false){
            $pos =strpos($html,'</body>');
            $newhtml = substr($html, 0, $pos) . $app_include . substr($html, $pos);
            $toupdate = [
                "asset" => [
                    "key" => "layout/theme.liquid",
                    "value" => $newhtml
                ]
            ];
            $snippet = $shop->api()->rest('PUT', '/admin/api/2022-10/themes/'.$active_theme_id.'/assets.json',$toupdate);
            dd($snippet);
        }
        dd(2);
    }
}
