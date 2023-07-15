<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        // Asignar los valores del request a las propiedades del modelo
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        // Guardar el producto en la base de datos
        $producto->save();
        return response()->json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json($producto);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        // Asignar los valores del request a las propiedades del modelo
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        // Guardar los cambios en la base de datos
        $producto->save();
        return response()->json($producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        // Eliminar el producto de la base de datos
        $producto->delete();
        return response()->json(['message' => 'Producto eliminado']);
    }
}
