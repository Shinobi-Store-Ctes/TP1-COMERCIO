<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
use App\Models\Talles;
use App\Models\Categorias;
use App\Models\User;
use App\Models\Mensaje;

class AdminController extends Controller
{
    public function index()
    {
        $allArticulos = Articulos::with(['talles', 'categorias'])->get();
        $talles = Talles::all();
        $categorias = Categorias::all();
        $usuarios = User::all();
        $mensajes = Mensaje::orderBy('fecha_envio', 'desc')->get();

        return view('admin.index', [
            'articulos' => $allArticulos,
            'talles' => $talles,
            'categorias' => $categorias,
            'usuarios' => $usuarios,
            'mensajes' => $mensajes,
        ]);
    }

    public function mostrarSeccion($seccion)
    {
        $articulos = Articulos::with(['talles', 'categorias'])->get();
        $talles = Talles::all();
        $categorias = Categorias::all();
        $usuarios = User::all();
        $mensajes = Mensaje::orderBy('fecha_envio', 'desc')->get();

        return view("admin.secciones.$seccion", compact('articulos', 'talles', 'categorias', 'usuarios', 'mensajes'));
    }
}
