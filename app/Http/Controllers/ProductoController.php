<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductosRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     * muestra un dato especifico
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * modifica un campo de un registro especifico
     */
    public function edit(Producto $producto)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('cant', ['only' => ['store']]);
    }

    // ---------------------------------------------------------------------------
    /**
     * Display a listing of the resource.
     * consultar
     */
    public function index()
    {
        return Producto::paginate(5);
    }

    /**
     * Store a newly created resource in storage.c
     * crear
     */
    public function store(ProductosRequest $request)
    {
        // $message = [
        //     'required' => 'El campo :attribute es requerido.',
        //     'max' => 'El campo :attribute no puede tener más de :max caracteres.',
        //     'min' => 'El campo :attribute no puede tener menos de :min caracteres.',
        //     'unique' => 'El campo :attribute ya existe.',
        //     'numeric' => 'El campo :attribute debe ser numérico.',
        // ];
        // $validated = $request->validate([
        //     'nombre' => 'required|max:20|min:1|unique:Productos',
        //     'cantidad' => 'required|numeric|max:100|min:1',
        // ],$message);
        Producto::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     * modificar
     */
    public function update(Request $request, Producto $producto)
    {
        Producto::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     * eliminar
     */
    public function destroy(Producto $producto)
    {
        Producto::findOrFail($producto->id)->delete();
    }
}
