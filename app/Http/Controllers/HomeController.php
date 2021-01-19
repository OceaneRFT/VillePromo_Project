<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produits = DB::table('products')->get();
        // dd($produits);
        return view('homepage', compact('produits'));
    }

    public function productpage(Request $request)
    {
        // echo"page produit";
        // dd($request->id);
        $produit = Product::find($request->id);
        return view('productpage', compact('produit'));
    }

    public function viewByCategory(Request $request)
    {
        // $categories = DB::table('categories')->get('name');
        // dd($categories);

        $produits = Product::where('category_id',$request->id)->get();
        return view('category', compact('produits'));
    }
}
