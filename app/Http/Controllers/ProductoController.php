<?php

namespace App\Http\Controllers;

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
    // ---------------------------------------------------------------------------
    /**
     * Display a listing of the resource.
     * consultar
     */
    public function index()
    {
        return Producto::all();
    }

    /**
     * Store a newly created resource in storage.c
     * crear
     */
    public function store(Request $request)
    {
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
