<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        //menampilkan data product
        $data['carts'] = Cart::with('product')->get();
        return view('cart/index', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|integer|exists:products,id',
        ]);

        $addCart = Cart::where('product_id', $request->product_id)->first();
        if (is_null($addCart)) {
            $addCart['quantity'] = 1;
            $addCart['product_id'] = $validatedData['product_id'];
            Cart::create($addCart);
        } else {
            $addCart['quantity'] += 1;
            $addCart->save();
        }
        return redirect('/');
    }

    public function destroy($id)
    {
        Cart::find($id)->delete();
        return redirect('/cart');
    }
}
