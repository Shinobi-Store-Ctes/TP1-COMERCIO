<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
use App\Models\Talles;
use App\Models\Categorias;



class ArticulosController extends Controller
{
    public function index() {
        $allArticulos = Articulos::with(['talles', 'categorias'])->get();
        $talles = Talles::all();
        $categorias = Categorias::all();
        return view('articulos.index',[
            'articulos' => $allArticulos,
            'talles' => $talles,
            'categorias' => $categorias
        ]);

    }

    public function detalle($id) {
        $articulo = Articulos::findOrFail($id);
        return view('articulos.detalle', compact('articulo'));
    }

    public function store(Request $request) {
        $input = $request->all();
        $articulo = new Articulos();
        $articulo->nombre = $input['nombre'];
        $articulo->descripcion = $input['descripcion'];
        $articulo->precio = $input['precio'];
        $articulo->talle_id = $input['talle_id'];
        // Manejo de imágenes
        if ($request->hasFile('imagen')) {
            $filename = time() . '_img.' . $request->imagen->extension();
            $request->imagen->move(public_path('images/productos'), $filename);
            $articulo->imagen = $filename;
        } else {
            $articulo->imagen = $input['imagen'] ?? null;
        }
        
        if ($request->hasFile('imagen_hover')) {
            $filenameHover = time() . '_hover.' . $request->imagen_hover->extension();
            $request->imagen_hover->move(public_path('images/productos/'), $filenameHover);
            $articulo->imagen_hover = $filenameHover;
        } else {
            $articulo->imagen_hover = $input['imagen_hover'] ?? null;
        }

        $articulo->fecha_creacion = $input['fecha_creacion'];
        $articulo->categoria_id = $input['categoria_id'];
        $articulo->cantidad = $input['cantidad'];
 
        $articulo->save();

        return redirect()
            ->route('admin.section', ['seccion' => 'articulos'])
            ->with('feedback.message', 'Producto agregado correctamente.')
            ->with('feedback.type', 'success');
    }

    public function destroy($id) {
        $articulo = Articulos::findOrFail($id);
        $articulo->delete();

        return redirect()
            ->route('admin.section', ['seccion' => 'articulos'])
            ->with('feedback.message', 'Articulo eliminado correctamente')
            ->with('feedback.type', 'success');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'talle' => 'nullable|string|max:5',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'imagen_hover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fecha_creacion' => 'nullable|date',    
            'categoria' => 'nullable|string|max:20',
            'cantidad' => 'required|integer|min:0',
        ]);

        $articulo = Articulos::findOrFail($id);
        $articulo->fill($request->except(['imagen', 'imagen_hover']));

        if ($request->hasFile('imagen')) {
            $filename = time() . '_img.' . $request->imagen->extension();
            $request->imagen->move(public_path('images/productos/'), $filename);
            $articulo->imagen = $filename;
        }

        if ($request->hasFile('imagen_hover')) {
            $filenameHover = time() . '_hover.' . $request->imagen_hover->extension();
            $request->imagen_hover->move(public_path('images/productos/'), $filenameHover);
            $articulo->imagen_hover = $filenameHover;
        }

        $articulo->save();

        return redirect()
            ->route('admin.section', ['seccion' => 'articulos'])
            ->with('feedback.message', 'Producto actualizado correctamente.')
            ->with('feedback.type', 'success');
    }

}