<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje; // Importamos el modelo Mensaje


class ContactoController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }
    public function enviar(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            // Reglas de validación
            // El nombre es requerido, debe ser una cadena de texto y no puede exceder los 255 caracteres
            'nombre' => 'required|string|max:255',
            //El email es requerido, debe ser un dato del tipo email
            'email' => 'required|email',
            //El mensaje es requerido, debe ser una cadena de texto y no puede exceder los 1000 caracteres
            'mensaje' => 'required|string|max:1000',
        ],[
            // Mensajes de error personalizados
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre debe ser una cadena de texto.',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser válido.',
            'mensaje.required' => 'El mensaje es obligatorio.',
            'mensaje.string' => 'El mensaje debe ser una cadena de texto.',
            'mensaje.max' => 'El mensaje no puede exceder los 1000 caracteres.',
        ]);

        // Guardar el mensaje en la base de datos
        // Guardar el mensaje en la base de datos
            Mensaje::create([
                'nombre' => $validated['nombre'],
                'email' => $validated['email'],
                'mensaje' => $validated['mensaje'],
                'fecha_envio' => now(), // campo adicional
            ]);


        // Le vamos a dar feedback al usuario

        return redirect()->back()->with('feedback.message', '¡Tu mensaje fue enviado con éxito!');
    }
}
