<?php

namespace App\Http\Controllers;
use App\Categorie;

use Illuminate\Http\Request;
use App\Menu;
use App\Content;

class PagesController extends MainController{
    
    public function home(){
        self::$data['title'] = 'Home Page';
        self::$data['categories'] = Categorie::all()->toArray();
        // $cart = Cart::getContent()->toArray();
        // sort($cart);
        // self::$data['cart'] = $cart;
        return view('site.content.home',self::$data);
        
    }

    public function content($url){

        Content::getAll($url, self::$data);
        return view('site.content.content', self::$data);

    }
     public function about(){
        
         self::$data['title'] = 'About';
         return view('site.content.about',self::$data);
        
     }

     public function contact(){

        self::$data['title'] = 'Contact';
        return view('site.content.contact',self::$data);

     }


}
