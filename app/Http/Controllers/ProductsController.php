<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //


    // 
    public function index()
    {
        
        $data = DB::table('products')->get();
        return response()->json($data);
    }
 
    
}
