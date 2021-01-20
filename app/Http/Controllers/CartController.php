<?php

namespace App\Http\Controllers;

// use Darryldecode\Cart;

use App\Models\Product;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $produit = Product::find($request->id);
        Cart::add(array(
            'id' => $produit->id, // inique row ID
            'name' => $produit->name,
            'price' => $produit->price,
            'quantity' => $request->quantity,
            'attributes' => array('photo'=>$produit->picture)
        ));
        return redirect(route('cart_index'));
    }

    public function index(){
        $content = Cart::getContent();
        // dd($content);
        return view('panier',compact('content'));
    }
}
