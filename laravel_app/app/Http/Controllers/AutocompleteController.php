<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{
    function index(){
        return view('inc.navbar');
    }

    function fetch(Request $request){
        if($request->get('query')){
            $query = $request->get('query');
            $data = DB::table('products')
                    ->where('search', 'LIKE', '%{$query}%')
                    ->get();
            $output = '<ul class="dropdown-menu style="display:block; position:relative">';
            foreach($data as $row){
                $output .= '<li><a href="#">'. $row->search .'</a></li>';
            }

            $output .= '</ul>';

            echo $output;

                    
        }
    }
}
