<?php

// Usmos el controlador de la vista HOME
use App\Http\Controllers\HomeController;

// Usamos el Facade de Laravel para las rutas
use Illuminate\Support\Facades\Route;

// Usamos el controlador de la vista CONTACTO
use App\Http\Controllers\ContactoController;
// Usamos el controlador de la vista ARTICULOS
use App\Http\Controllers\ArticulosController;
// Usamos el controlador de la vista CATEGORIAS
use App\Http\Controllers\CategoriasController;
// Usamos el controlador de la vista TALLES
use App\Http\Controllers\TallesController;
// Usamos el controlador de la vista AUTH
use App\Http\Controllers\AuthController;
// Usamos el controlador de la vista ADMIN
use App\Http\Controllers\AdminController;
//Usamos el controlador para la vista Alumno
use App\Http\Controllers\AlumnoController;
// Usamos el middleware para verificar si el usuario es admin
use App\Http\Middleware\IsAdmin;
//Usamos el controlador para la las Noticias de river
use App\Http\Controllers\NoticiaController;


// LLamando al Metodo Index
// vista home
Route::get('/', [HomeController::class, 'index'])->name('home'); 


// Listado de articulos
Route::get('/articulos', [ArticulosController::class, 'index'])->name('articulos.index'); 

//Listado de articulos por Id (DETALLE DE ARTICULO)
//Correxion de la ruta ( /{id})
Route::get('/articulos/{id}', [ArticulosController::class, 'detalle'])
    ->name('articulos.detalle')
    ->whereNumber('id'); 

//Ruta para vista de contacto
Route::get('/contacto', [ContactoController::class, 'contacto'])->name('contacto');
// Ruta para procesar el formulario de contacto
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');

// Ruta para mostrar la vista alumno
Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumno.index');
// Listado de rutas protegidas para roles de admin
// Middleware para verificar si el usuario es admin 
// Middleware esta dentro de App-> Http-> Middleware->IsAdmin   
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/{seccion}', [AdminController::class, 'mostrarSeccion'])->name('admin.section');


    Route::delete('/articulos/{id}', [ArticulosController::class, 'destroy'])->name('articulos.destroy');
    Route::put('/articulos/{id}', [ArticulosController::class, 'update'])->name('articulos.update');
    Route::post('/articulos', [ArticulosController::class, 'store'])->name('articulos.store');

    Route::delete('/categorias/{id}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');
    Route::put('/categorias/{id}', [CategoriasController::class, 'update'])->name('categorias.update');
    Route::post('/categorias', [CategoriasController::class, 'store'])->name('categorias.store');

    Route::delete('/talles/{id}', [TallesController::class, 'destroy'])->name('talles.destroy');
    Route::put('/talles/{id}', [TallesController::class, 'update'])->name('talles.update');
    Route::post('/talles', [TallesController::class, 'store'])->name('talles.store');
});
    
// Rutas para la autenticación

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

// Ruta para procesar el inicio de sesión
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Ruta para mostrar el formulario de registro
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('auth.register');

// Ruta para procesar el registro
Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');

// Ruta para Deslogearse
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

//ruta para las noticias
Route::middleware(['auth'])->group(function () {
    Route::middleware('admin')->group(function () {
        Route::resource('admin/noticias', NoticiaController::class);
    });
});

