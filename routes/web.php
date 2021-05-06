<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(["register" => false]);

// Pantalla dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

// Gestión de usuarios
Route::resource('profile', 'HomeController');

// Gestión de roles
Route::resource('roles', 'RoleController');

// Gestión de usuarios
Route::resource('users', 'UserController');

// Gestión de permisos
Route::resource('permissions', 'PermissionController');

// Gestión de clientes
Route::resource('customers', 'CustomerController');

// Gestión de transportes
Route::resource('shippers', 'ShipperController');

// Gestión de proveedores
Route::resource('suppliers', 'SupplierController');

// Gestión de empleados
Route::resource('employees', 'EmployeeController');

// Gestión de categorias
Route::resource('categories', 'CategoryController');

// Gestión de tallas
Route::resource('sizes', 'SizeController');

// Gestión de colores
Route::resource('colors', 'ColorController');

// Gestión de Productos
Route::resource('products', 'ProductController');

// Gestión de flujos de caja
Route::resource('flows', 'CashFlowController');

// Gestion de ventas
Route::resource('sales', 'SaleController');


