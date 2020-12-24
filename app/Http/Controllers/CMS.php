<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pages;

class CMS extends Controller
{
    //возвращает страницу  велком , делая предачу в сайдбар для нашего списка (выводяться дети странички в сайдбаре списком слева при переходе на статью)
    public function get_page($lang,$page,Request $request) {
        $url = $lang."/".$page;

        if($request->input('alias')){
            $children = pages::getChildren($request->input('alias'),'');
            $childrenSort = pages::getChildren($request->input('alias'), $request->input('sort'));
        }else{
            $children = pages::getChildren($url, '');
            $childrenSort = pages::getChildren($url, $request->input('sort'));
        }

        if(!$request->input('sort')) {
            $data =  pages::get_page($url, $request->input('alias'));
            return view("welcome",["page"=>$data,'children' => $children]);
        }

        $data =  pages::get_page($url, $request->input('alias'));
        return view("welcome", ["page"=>$data,'children' => $childrenSort]);
    }

    // Страница дефолт, где есть список статей (главная страница )
    public static function default(Request $request) {

        if(!$request->input('sort')) {
            $data =  pages::get_page("default",'');
            $children = pages::getChildren("default");
            return view("welcome",["page"=>$data,'children' => $children]);
        }
        $data =  pages::get_page("default", '');
        $children =  pages::getChildren("default",$request->input('sort'));
        return view("welcome",["page"=>$data,'children' => $children]);
    }
}
