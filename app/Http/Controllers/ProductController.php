<?php

namespace App\Http\Controllers;


use App\Product;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostramos el frmulario para crear un nuevo producto
        $product = new Product();
        // return view('products.create', ['product' => $product]);
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //$product = Product::find($id);

        // return view('products.edit', compact('product'));
        //  return view('products.edit', ["product" => $product]);
     
        // return view('products.form', ["product" => $product]);

        // La clave de la izquierda DEBE ser 'product' en singular
        // 1. Inyecta esto aquí temporalmente:
    //dd($id, $product);

    //return view('products.edit', ['product' => $product]);


    
    // findOrFail asegura que regrese una instancia del Modelo Product (un objeto limpio)
    // y no un constructor de consultas (Query Builder).
    $product = Product::findOrFail($id);

    return view('products.edit', compact('product'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
