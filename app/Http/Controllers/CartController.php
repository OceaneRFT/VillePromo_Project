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
            'attributes' => array('photo'=>$produit->picture, 'prix_ttc'=>$produit->prixTTC())
        ));
        return redirect(route('cart_index'));
    }

    public function index(){
        $content = Cart::getContent();
        // dd($content);

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => 'VAT 20%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '20%',
            )
        );
        Cart::condition($condition);

        $total_ht = Cart::getTotal();
      
        $tva = $total_ht * 0.2;
        $total_ttc = $total_ht + $tva;

        return view('panier',compact('content','total_ttc','total_ht','tva'));
    }
}
