<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\ContactsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::prefix('admin')->name('admin')->middleware(['auth:sanctum', 'verified'])->group(function(){
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

  ###Contacts###
  Route::get('contacts/index', [ContactsController::class, 'index'])->name('contacts.index');
  Route::get('contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
  Route::post('contacts/store', [ContactsController::class, 'store'])->name('contacts.store');
  Route::get('contacts/delete/{contact_id}', [ContactsController::class, 'delete'])->name('contacts.delete');

  ###Departments###
  Route::get('departments/index', [DepartmentsController::class, 'index'])->name('departments.index');
  Route::get('departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
  Route::get('departments/edit/{department_id}', [DepartmentsController::class, 'edit'])->name('departments.edit');
  Route::post('departments/store', [DepartmentsController::class, 'store'])->name('departments.store');
  Route::put('departments/update/{department_id}', [DepartmentsController::class, 'update'])->name('departments.update');
  Route::get('departments/delete/{department_id}', [DepartmentsController::class, 'delete'])->name('departments.delete');
});
