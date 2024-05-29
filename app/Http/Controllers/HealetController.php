<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealetController extends Controller
{
    public function indexPage(){
        $title ='index' ;
        return view('index' , compact('title'));
    }

    public function aboutPage(){
        $title ='about' ;
        return view('about' , compact('title'));
    }

    public function blogPage(){
        $title ='blog' ;
        return view('blog' , compact('title'));
    }


    public function shopPage(){
        $title ='shop' ;
        return view('shop' , compact('title'));
    }


}
