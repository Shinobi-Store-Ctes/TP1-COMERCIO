<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate (Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()
                ->intended(route('home'))
                ->with ('feedback.message', 'Sesión iniciada correctamente')
                ->with('feedback.type', 'success');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('feedback.message', 'Credenciales incorrectas')
            ->with('feedback.type', 'danger');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        Log::info('Intentando registrar usuario', $request->all());
        $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:2|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Asignar el rol 'user' automáticamente
        ]);

        Auth::login($user);

        Log::info('Usuario registrado exitosamente', ['user_id' => $user->id]);

        return redirect()
            ->route('home')
            ->with('feedback.message', 'Registro exitoso, sesión iniciada');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('home')
            ->with('feedback.message', 'Sesión cerrada correctamente')
            ->with('feedback.type', 'success');
    }
}
