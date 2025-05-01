<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::latest()->paginate(10);
        return view('admin.noticias.index', compact('noticias'));
    }

    public function create()
    {
        return view('admin.noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $nombreImagen = null;

        if ($request->hasFile('imagen')) {
            $nombreImagen = time() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->move(public_path('images/noticias'), $nombreImagen);
        }

        Noticia::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'imagen' => $nombreImagen ? 'noticias/' . $nombreImagen : null,
        ]);

        return redirect()->route('admin.noticias.index')->with('success', 'Noticia creada correctamente.');
    }

    public function edit(Noticia $noticia)
    {
        return view('admin.noticias.edit', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            // Borrar imagen anterior si existe
            if ($noticia->imagen && File::exists(public_path('images/' . $noticia->imagen))) {
                File::delete(public_path('images/' . $noticia->imagen));
            }

            $nombreImagen = time() . '_' . $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->move(public_path('images/noticias'), $nombreImagen);
            $noticia->imagen = 'noticias/' . $nombreImagen;
        }

        $noticia->titulo = $request->titulo;
        $noticia->contenido = $request->contenido;
        $noticia->save();

        return redirect()->route('admin.noticias.index')->with('success', 'Noticia actualizada correctamente.');
    }

    public function destroy(Noticia $noticia)
    {
        if ($noticia->imagen && File::exists(public_path('images/' . $noticia->imagen))) {
            File::delete(public_path('images/' . $noticia->imagen));
        }

        $noticia->delete();

        return redirect()->route('admin.noticias.index')->with('success', 'Noticia eliminada correctamente.');
    }

    public function publicas()
    {
        $noticias = Noticia::latest()->take(3)->get();
        return view('home', compact('noticias'));
    }
}
