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
        // Consultamos todos los productos de la base de datos de forma paginada (por ejemplo, 10 por página)
        // O si prefieres traer todos de golpe: $products = Product::all();
        $products = Product::paginate(10);

        // Retornamos la vista pasándole la colección de productos
        return view('products.index', compact('products'));
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
        //dd($request->all());
        // 1. Validar que los datos cumplan con lo requerido
        $validatedData = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
        ]);

        // 2. Guardar el producto en la base de datos usando el Modelo
        // Como image_url no viene en el formulario, tomará el 'null' por defecto del modelo
        Product::create($validatedData);

        // 3. Redireccionamos al índice de productos
        return redirect()->route('products.index')->with('status', '¡Producto creado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Muestra el recurso indiividualmente
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
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
