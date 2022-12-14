<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function landingPage()
    {
        $shop = auth()->user();
//        $scripts = $shop->api()->rest('GET', '/admin/api/2022-10/script_tags.json')['body']['script_tags'];

//        dd($scripts);
//        if(count($scripts)>0){
//            $snippet = $shop->api()->rest('DELETE', '/admin/api/2022-10/script_tags/'.$scripts[0]->id.'.json')['body'];
//            $script_tag_info = [
//                "script_tag" => [
//                    "event" => "onload",
//                    "src" => asset('assets/script.js')
//                ]
//            ];
//            $snippet = $shop->api()->rest('PUT', '/admin/api/2022-10/script_tags/'.$scripts[0]->id.'.json', $script_tag_info);
//            dd($snippet);
//        }else{
//            $script_tag_info = [
//                "script_tag" => [
//                    "event" => "onload",
//                    "src" => asset('assets/script.js')
//                ]
//            ];
//            $snippet = $shop->api()->rest('POST', '/admin/api/2022-10/script_tags.json', $script_tag_info);
//            dd($snippet);
//        }
//        dd('no record');

//        dd($snippet);
//        $themes = $shop->api()->rest('GET', '/admin/api/2022-01/themes.json');
//        $scripts = $shop->api()->rest('GET', '/admin/api/2022-10/script_tags.json');
//        $themes = $themes['body']['themes'];
//        dd($themes);
//        $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
//        foreach ($themes  as $theme){
//            if($theme->role == 'main'){
//                $active_theme = $theme;
//            }
//        }


//        $data_to_put = [
//            'asset' => [
//                "key" => 'snippets/wixpa.liquid',
//                "value" => "<style>button[name='add']{display: none !important;}</style><script>alert('asdfasdf')</script>"
//            ]
//        ];
//        $snippet = $shop->api()->rest('PUT', '/admin/api/2022-10/themes/'.$active_theme->id.'/assets.json', $data_to_put);
//        $this->include_snippet($active_theme->id, $shop);
//        $res = auth()->user()->api()->rest('GET','/admin/api/2022-10/products.json');
        return view('home');
    }

    public function addScript(){
        $shop = auth()->user();
        $scripts = $shop->api()->rest('GET', '/admin/api/2022-10/script_tags.json')['body']['script_tags'];
        if(count($scripts) != 0){
            $script_tag_info = [
                "script_tag" => [
                    "event" => "onload",
                    "src" => asset('assets/script.js')
                ]
            ];
            $snippet = $shop->api()->rest('POST', '/admin/api/2022-10/script_tags.json', $script_tag_info);
            return redirect()->route('home')->with('success', 'Make Offer Button Added Successfully');
        }
    }

    public function updateScript(){
        $shop = auth()->user();
        $scripts = $shop->api()->rest('GET', '/admin/api/2022-10/script_tags.json')['body']['script_tags'];
        if(count($scripts)>0) {
            $script_tag_info = [
                "script_tag" => [
                    "event" => "onload",
                    "src" => asset('assets/script.js')
                ]
            ];
            $snippet = $shop->api()->rest('PUT', '/admin/api/2022-10/script_tags/' . $scripts[0]->id . '.json', $script_tag_info);
            dd($snippet);
            return redirect()->route('home')->with('success', 'Make Offer Button Script Updated Successfully');
        }else{
            return redirect()->route('home')->with('error', 'Something Wrong');
        }
    }

    public function removeScript()
    {
        $shop = auth()->user();
        $scripts = $shop->api()->rest('GET', '/admin/api/2022-10/script_tags.json')['body']['script_tags'];
        if(count($scripts)>0) {
            $snippet = $shop->api()->rest('DELETE', '/admin/api/2022-10/script_tags/' . $scripts[0]->id . '.json')['body'];
            return redirect()->route('home')->with('success', 'Make Offer Button Remove Successfully');
        }
        return redirect()->route('home')->with('error', 'Something Wrong');
    }
    public function include_snippet($active_theme_id, $shop)
    {
        $html = $shop->api()->rest('GET', '/admin/api/2022-10/themes/'.$active_theme_id.'/assets.json', ['asset[key]' => 'layout/theme.liquid'])['body']['asset']['value'];
        $app_include = "{% comment %}//btnhider start {% endcomment %}"."\n {% capture snippet_content %}\n {% include '".'wixpa.liquid'."' %} \n{% endcapture %}
        \n {% unless snippet_check contains 'Liquid error'%}\n {{ snippet_content }}\n {% endunless %}\n"."{% comment %}//btnhider end {% endcomment %}";
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

    public function sendEmail(Request $request){
        dd(auth()->user());
    }
}
