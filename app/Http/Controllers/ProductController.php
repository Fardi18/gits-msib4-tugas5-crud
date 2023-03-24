<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data product
        $data['products'] = Product::with('category')->get();
        return view('product/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // ambil data category
        $data['categories'] = Category::all();

        //create data (add)
        return view(
            'product/add',
            $data
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi form
        $validated = $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_category' => 'required',
            'product_price' => 'required|numeric',
        ]);

        //menambahkan data ke database
        Product::create([
            'name' => $validated['product_name'],
            'description' => $validated['product_description'],
            'category_id' => $validated['product_category'],
            'price' => $validated['product_price']
        ]);

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::all();
        $data['products'] = Product::find($id);

        //create data (add)
        return view(
            'product/edit',
            $data
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_category' => 'required',
            'product_price' => 'required|numeric',
        ]);

        Product::where('id', $id)->update([
            'name' => $validated['product_name'],
            'description' => $validated['product_description'],
            'category_id' => $validated['product_category'],
            'price' => $validated['product_price']
        ]);

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/product');
    }
}
