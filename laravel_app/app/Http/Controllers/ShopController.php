<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use Illuminate\Support\Facades\Input;
use App\Order;
use DB, Cart, Session;

class ShopController extends MainController{

    public function categories(){
      
        self::$data['title'] = 'Shop Categories';
        self::$data['categories'] = Categorie::all()->toArray();
        return view('site.content.categories' , self::$data);
        
    }

    public function products($curl,Request $request){

        self::$data['categories'] = Categorie::all()->toArray();
        $sort = $request['orderBy'] ? $request['orderBy'] : '';
        if( !empty($sort) ){

            $products = Product::getProductsSort($curl, $sort, self::$data);
            self::$data['curl'] = $curl;
            return view('site.content.products', self::$data);

        }else{


            $products = Product::getProducts($curl, self::$data);
            self::$data['curl'] = $curl;
            return view('site.content.products', self::$data);

        }


    }


    public function item($curl,$purl){
   
        Product::getItem($purl, self::$data);
        self::$data['purl'] = $purl;
        self::$data['curl'] = $curl;
        return view('site.content.item', self::$data);
    
    }

    public function addToCart(Request $request){

        Product::addToCart($request['pid']);
     
    }

    public function checkout(){

        $cart = Cart::getContent()->toArray();
        sort($cart);
        self::$data['title'] = 'Shop checkout';
        self::$data['cart'] = $cart;
        return view('site.content.checkout', self::$data);

    }

    public function updateCart(Request $request){

        Product::updateCart($request);
        return redirect('shop/checkout');

    }


    public function clearCart(){

        Cart::clear();
        return redirect('shop/checkout');

    }

    public function removeItem(Request $request){

        if( Cart::get($request['pid']) ){

            Cart::remove($request['pid']);

        }

        return redirect('shop/checkout');

    }

    public function orderNow(){

        if( Cart::isEmpty() ){

            return redirect('shop/checkout');

        } else {

            if( ! Session::has('user_id') ){

                return redirect('user/signin?rd=shop/checkout');

            } else {

                Order::save_new();
                return redirect('shop');

            }

        }

    }

    public function search(){

        $q = Input::get('q');


        if( $q != " "){

            $products = Product::where('ptitle', 'LIKE', '%' . $q . '%')
            ->orWhere('article', 'LIKE', '%' . $q . '%')
            ->get();

        
            if(count($products) > 0){

                self::$data['title'] = $products[0]->ptitle . ' product';
                return view('site.content.item',self::$data)->withDetails($products)->withQuery($q);


            }


        }

        self::$data['title'] = 'Search';
        return view('site.content.item', self::$data)->withMessage("No product found...");


    }

    public function autocomplete(Request $request){



        if($request->search){
            
            $search = $request->search;
            $data = DB::table('products')
            ->where('ptitle', 'LIKE', "%$search%")
            ->orWhere('article', 'LIKE', "%$search%")
            ->select('ptitle')
            ->limit(10)->get();
            

            return response()->json($data);
        }
    }



}
