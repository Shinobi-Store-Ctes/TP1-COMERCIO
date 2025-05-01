@extends('admin.index')

@section('admin-section')
<div class="container mt-4">
    <h3 class="mt-4">Mensajes de Contacto</h3>
    <div class="table-responsive mt-3">
        <table class="table table-bordered mt-2 equal-width-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Fecha de envío</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mensajes as $mensaje)
                <tr>
                    <td>{{ $mensaje->id }}</td>
                    <td>{{ $mensaje->nombre }}</td>
                    <td>{{ $mensaje->email }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($mensaje->mensaje, 80) }}</td>
                    <td>{{ \Carbon\Carbon::parse($mensaje->fecha_envio)->format('d/m/Y H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No hay mensajes.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
