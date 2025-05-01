@extends('layout.app')

@section('title', 'Login')

@section('content')
    <div id="login">
        <div class="container mb-5 text-center">
            <h2 class="mt-3 font-weight-bold">Login</h2>
        </div>
        <div class="container" style="max-width: 500px; margin: 0 auto;">
            <form method="post" action="{{ route('auth.authenticate') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary mt-3">Loguearse</button>
                </div>
                <p class="text-center" style="font-size: 0.875rem;">
                    Si no tienes cuenta,
                    <a href="{{ url('/register') }}">Regístrate aquí</a>.
                </p>
            </form>
        </div>
    </div>
    
@endsection