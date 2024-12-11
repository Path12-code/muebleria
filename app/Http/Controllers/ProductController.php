<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        $comments = Comment::where('product_id',$id)->get();
        return view('products.show', compact('product','comments'));
    }
}
