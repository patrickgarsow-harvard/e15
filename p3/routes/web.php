<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ArticleCategoriesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentsController;
use App\Http\Controllers\Admin\EmployeesController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\EventCategoriesController;
use App\Http\Controllers\Admin\UploadsController;
use App\Http\Controllers\Admin\UploadCategoriesController;
use App\Http\Controllers\Admin\UsersController;
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
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/', function () {
    return Inertia::render('Main/Home', [
        'canLogin' => Route::has('login'),
        //'canLogin' => Route::get('/login', [LoginController::class, 'authenticate'])->name('login.authenticate'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::controller(LoginController::class)->group(function(){
//     Route::get('/login', 'authenticate')->name('login.authenticate');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

###Admin Grouping###
Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'verified'])->group(function(){
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    ###Articles###
    Route::controller(ArticlesController::class)->group(function () {
        Route::get('articles/index', 'index')->name('articles.index');
        Route::get('articles/edit/{article_id}', 'edit')->name('articles.edit');
        Route::put('articles/update/{article_id}', 'update')->name('articles.update');
        Route::get('articles/create', 'create')->name('articles.create');
        Route::post('articles/store', 'store')->name('articles.store');
        Route::get('articles/delete/{article_id}', 'delete')->name('articles.delete');
    });

    ###Article Categories###
    Route::controller(ArticleCategoriesController::class)->group(function () {
        Route::get('article_categories/index', 'index')->name('article_categories.index');
        Route::get('article_categories/edit/{article_category_id}', 'edit')->name('article_categories.edit');
        Route::put('article_categories/update/{article_category_id}', 'update')->name('article_categories.update');
        Route::get('article_categories/create', 'create')->name('article_categories.create');
        Route::post('article_categories/store', 'store')->name('article_categories.store');
        Route::get('article_categories/delete/{article_category_id}', 'delete')->name('article_categories.delete');
    });

    ###Contacts###
    Route::controller(ContactsController::class)->group(function () {
        Route::get('contacts/index', 'index')->name('contacts.index');
        Route::get('contacts/edit/{contact_id}', 'edit')->name('contacts.edit');
        Route::put('contacts/update/{contact_id}', 'update')->name('contacts.update');
        Route::get('contacts/create', 'create')->name('contacts.create');
        Route::post('contacts/store', 'store')->name('contacts.store');
        Route::get('contacts/delete/{contact_id}', 'delete')->name('contacts.delete');
    });

    ###Departments###
    Route::get('departments/index', [DepartmentsController::class, 'index'])->name('departments.index');
    Route::get('departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
    Route::get('departments/edit/{department_id}', [DepartmentsController::class, 'edit'])->name('departments.edit');
    Route::post('departments/store', [DepartmentsController::class, 'store'])->name('departments.store');
    Route::put('departments/update/{department_id}', [DepartmentsController::class, 'update'])->name('departments.update');
    Route::get('departments/delete/{department_id}', [DepartmentsController::class, 'delete'])->name('departments.delete');

    ###Employees###
    Route::controller(EmployeesController::class)->group(function () {
        Route::get('employees/index', 'index')->name('employees.index');
        Route::get('employees/edit/{employee_id}', 'edit')->name('employees.edit');
        Route::put('employees/update/{employee_id}', 'update')->name('employees.update');
        Route::get('employees/create', 'create')->name('employees.create');
        Route::post('employees/store', 'store')->name('employees.store');
        Route::get('employees/delete/{employee_id}', 'delete')->name('employees.delete');
    });

    ###Events###
    Route::controller(EventsController::class)->group(function () {
        Route::get('events/index', 'index')->name('events.index');
        Route::get('events/edit/{employee_id}', 'edit')->name('events.edit');
        Route::put('events/update/{employee_id}', 'update')->name('events.update');
        Route::get('events/create', 'create')->name('events.create');
        Route::post('events/store', 'store')->name('events.store');
        Route::get('events/delete/{employee_id}', 'delete')->name('events.delete');
    });

    ###Events Categories###
    Route::controller(EventCategoriesController::class)->group(function () {
        Route::get('event_categories/index', 'index')->name('event_categories.index');
        Route::get('event_categories/edit/{employee_id}', 'edit')->name('event_categories.edit');
        Route::put('event_categories/update/{employee_id}', 'update')->name('event_categories.update');
        Route::get('event_categories/create', 'create')->name('event_categories.create');
        Route::post('event_categories/store', 'store')->name('event_categories.store');
        Route::get('event_categories/delete/{employee_id}', 'delete')->name('event_categories.delete');
    });

    ###Uploads###
    Route::controller(UploadsController::class)->group(function () {
        Route::get('uploads/index', 'index')->name('uploads.index');
        Route::get('uploads/edit/{upload_id}', 'edit')->name('uploads.edit');
        Route::put('uploads/update/{upload_id}', 'update')->name('uploads.update');
        Route::get('uploads/create', 'create')->name('uploads.create');
        Route::post('uploads/store', 'store')->name('uploads.store');
        Route::get('uploads/delete/{upload_id}', 'delete')->name('uploads.delete');
    });

    ###Upload Categories###
    Route::controller(UploadCategoriesController::class)->group(function () {
        Route::get('upload_categories/index', 'index')->name('upload_categories.index');
        Route::get('upload_categories/edit/{upload_category_id}', 'edit')->name('upload_categories.edit');
        Route::put('upload_categories/update/{upload_category_id}', 'update')->name('upload_categories.update');
        Route::get('upload_categories/create', 'create')->name('upload_categories.create');
        Route::post('upload_categories/store', 'store')->name('upload_categories.store');
        Route::get('upload_categories/delete/{upload_category_id}', 'delete')->name('upload_categories.delete');
    });

    ###Users###
    Route::controller(UsersController::class)->group(function () {
        Route::get('users/index', 'index')->name('users.index');
        Route::get('users/edit/{user_id}', 'edit')->name('users.edit');
        Route::put('users/update/{user_id}', 'update')->name('users.update');
        Route::get('users/create', 'create')->name('users.create');
        Route::post('users/store', 'store')->name('users.store');
        Route::get('users/delete/{user_id}', 'delete')->name('users.delete');
    });

});
