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

    public function viewByCategory(){
        //récupérer toutes les catégories
        $categories = Category::where('id',1)->get();
        dd($categories);
        return view('category');
    }
}
