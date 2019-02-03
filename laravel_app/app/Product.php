<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB, Cart, Session, Image;

class Product extends Model{

    static public function getProducts($curl, &$data){

        $products = DB::table('products AS p')
        ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.url' ,'c.title')
        ->orderBy('price','asc')
        ->where('c.url', '=', $curl);

        if($data['total_count'] = $products->count()){

        $products = $products->paginate(4);
        $data['products'] = $products;
        $data['title'] = $products[0]->title . ' products';

        }
        else {

        abort(404);

        }

    }

    static public function getProductsSort($curl,$sort, &$data){

        $products = DB::table('products AS p')
        ->join('categories AS c', 'c.id', '=', 'p.categorie_id')
        ->select('p.*', 'c.url' ,'c.title')
        ->orderBy('price',$sort)
        ->where('c.url', '=', $curl);

        if($data['total_count'] = $products->count()){

        $products = $products->paginate(4);
        $data['products'] = $products;
        $data['sort'] = $sort;
        $data['title'] = $products[0]->title . ' products';

        }
        else {

        abort(404);

        }

    }

    static public function getItem($purl, &$data){


        if($item = self::where('purl', '=', $purl)->first()){

            $data['product'] = $item->toArray();
            $data['title'] = $data['product']['ptitle'];


        }else{

            abort(404);
        }

    }

    static public function addToCart($pid){
        if( !empty($pid ) && is_numeric($pid) ){
            
            if($product = self::find($pid)){
                
                $product = $product->toArray();
                
                if( !Cart::get($pid) ){
                    
                    Cart::add($pid, $product['ptitle'], $product['price'], 1, []);
                    Session::flash('sm', $product['ptitle'] . ' added to cart!');
                    Session::flash('smpos', 'toast-bottom-center');
                }
            }
            
            
        }

    }

    static public function updateCart($request){

        if(!empty($request['pid']) && is_numeric($request['pid'])){
            
            if(!empty($request['op'])){

                if($product = Cart::get($request['pid'])){

                    $product = $product->toArray();

                    if($request['op'] == 'plus'){
    
                        Cart::update($request['pid'], ['quantity' => 1]);
    
                    } elseif($request['op'] == 'minus'){
    
                        Cart::update($request['pid'], ['quantity' => - 1]);
    
                    }

                }


            }

        }

    }

    static public function save_new($request){

        $image_name = 'default-image.jpg';

        if( $request->hasFile('pimage') && $request->file('pimage')->isValid() ){

            $file = $request->file('pimage');

            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();

            $request->file('pimage')->move( public_path() . '/images/', $image_name);
            $img = Image::make( public_path() . '/images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }

        $product = new self();
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['ptitle'];
        $product->article = $request['article'];
        $product->purl = $request['purl'];
        $product->pimage = $image_name;
        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product created successfuly');
        Session::flash('smpos', 'toast-top-center');


    }

    static public function update_item($request, $id){

        $image_name = '';

        if( $request->hasFile('pimage') && $request->file('pimage')->isValid() ){

            $file = $request->file('pimage');

            $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();

            $request->file('pimage')->move( public_path() . '/images/', $image_name);
            $img = Image::make( public_path() . '/images/' . $image_name);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();

        }

        $product = self::find($id);
        $product->categorie_id = $request['categorie_id'];
        $product->ptitle = $request['ptitle'];
        $product->article = $request['article'];
        $product->purl = $request['purl'];

        if($image_name){

            $product->pimage = $image_name;

        }

        $product->price = $request['price'];
        $product->save();
        Session::flash('sm', 'Product updated successfuly');
        Session::flash('smpos', 'toast-top-center');

    }

    static public function getProductsSearch($q, &$data){


        if( $q != " "){

            $products = Product::where('ptitle', 'LIKE', '%' . $q . '%')
            ->orWhere('article', 'LIKE', '%' . $q . '%')
            ->get();

        
            if(count($products) > 0){

            $data['product'] = $products->toArray();
            $data['title'] = $products[0]->ptitle . ' product';

            }


        }

        $data['title'] = 'No result';

    }

    
}


