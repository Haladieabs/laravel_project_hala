<?php

use App\Models\users;

use App\Http\Controllers\signup;
use App\Http\Controllers\logIn_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReservatioController;
use App\Http\Controllers\search_controller;
use App\Http\Controllers\UsersController;
use App\Models\category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Change Port
// php artisan serve --port=8001


//admin routes
Route::get('/admin', function () {
    return view('admin.Login');
});


// Route::get('/AdminUser', function () {
//     return view('admin.Users');
// });

Route::get('/AdminAccount', function () {
    return view('admin.Account');
});

Route::get('/AdminLogin', function () {
    return view('admin.Login');
});

Route::get('/AdminIndex', function () {
    return view('admin.Index');
});



Route::get('AdminCategories', [CategoryController::class, 'index'] );
Route::post('addCat', [CategoryController::class, 'create'] );
Route::post('updateCat', [CategoryController::class, 'edit'] );
Route::get('deleteCat/id/{id}', [CategoryController::class, 'destroy'] );




Route::get('AdminTrips', [TripsController::class, 'index'] );
Route::post('addtrp', [TripsController::class, 'create'] );
Route::post('updatetrp', [TripsController::class, 'edit'] );
Route::get('deletetrp/id/{id}', [TripsController::class, 'destroy'] );






Route::get('AdminOrders', [ReservatioController::class, 'index'] );
Route::post('addres', [ReservatioController::class, 'create'] );
Route::post('editres', [ReservatioController::class, 'update'] );
Route::get('updateres/id/{id}/status/{status}', [ReservatioController::class, 'edit'] );
Route::get('deleteRes/id/{id}', [ReservatioController::class, 'destroy'] );



Route::get('/AdminAdd_users', function () {
    return view('admin.Add_users');
});

Route::get('AdminUser', [UsersController::class, 'index'] );
Route::post('adduse', [UsersController::class, 'create'] );
Route::get('deleteusr/id/{id}', [UsersController::class, 'destroy'] );
Route::get('updateusr/id/{id}/status/{status}', [UsersController::class, 'edit'] );
//end admin routes

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});







Route::get('/details', function () {
    return view('details');
});

Route::get('/', [CategoryController::class , 'categ'] );




Route::get('/categories', function () {
    return view('categories');
});


Route::get('/tours', function () {
    return view('tours');
})->name('tours');






Route::get('/enjoyment',[TripsController::class, 'enjoyment']);
Route::get('/medical',[TripsController::class, 'medical']);
Route::get('/archaeological',[TripsController::class, 'archaeological']);
Route::get('/religious',[TripsController::class, 'religious']);
Route::get('/petradetails',[TripsController::class, 'petradetails']);
Route::get('/deaddetails',[TripsController::class, 'deaddetails']);
Route::get('/ummdetails',[TripsController::class, 'ummdetails']);
Route::get('/ammandetails',[TripsController::class, 'ammandetails']);
Route::get('/aqabadetails',[TripsController::class, 'aqabadetails']);
Route::get('/wadidetails',[TripsController::class, 'wadidetails']);
Route::get('/user',[UsersController::class, 'user']);
Route::get('/edit',[UsersController::class, 'edit']);
Route::post('/update/{id}',[UsersController::class, 'update']);
Route::post('/usertrup',[TripsController::class, 'usertrup']);




//sign up toutes
Route::get('/signup', [signup::class , 'index'])->name('signup');
Route::post('/store' , [signup::class , 'store'])->name('store');
//end sigup
//log in routes
Route::get('/login', [logIn_controller::class , 'index'])->name('login');
Route::post('/login' , [logIn_controller::class , 'check'])->name('check');
//end login
//logout
Route::get('/logout' , function(){
    if(session()->has('name')){
        session()->pull('name');
    }
    return redirect()->route('login');
})->name('logout');
//search
Route::get('/book' , [search_controller::class , 'index'])->name('book');
Route::post('/search' , [search_controller::class , 'search'])->name('search');
// Route::get('/book', function () {
//     return view('book');
// })->name('book');
Route::get('/home', [search_controller::class , 'destroy'])->name('home');
Route::get('/' , function(){
    return view('home');
})->name('home');