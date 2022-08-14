<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AmenityController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.welcome');
});
Route::get('/property', function () {
    return view('frontend.property');
});
Route::get('/forrent', function () {
    return view('frontend.propertyRent');
});
Route::get('/forsale', function () {
    return view('frontend.propertySale');
});
Route::get('/vacationrental', function () {
    return view('frontend.propertyRental');
});
Route::get('/forrent/detail', function () {
    return view('frontend.detail');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/agent', function () {
    return view('frontend.agent');
});
Route::get('/contact', function () {
    return view('frontend.contact');
}); 

Route::get('/admin/dashboard', function () {
    return view('backend.layouts.dashboard');
});


Route::get('/admin/user', function () {
    return view('backend.users.user');
});

Route::get('/admin/user/add', function () {
    return view('backend.users.add-user');
});
Route::get('/admin/user/edit', function () {
    return view('backend.users.edit-user');
});
Route::get('/admin/property/create', function () {
    return view('backend.property.create-property');
});
Route::get('/admin/property/edit', function () {
    return view('backend.property.edit-property');
});
Route::get('/admin/profile', function () {
    return view('backend.profile.profile');
});

Route::get('/admin/address/add', function () {
    return view('backend.address.edit_address');
});
Route::get('/admin/amenity', function () {
    return view('backend.amenity.amenity');
});

Route::get('/admin/type/rent', function () {
    return view('backend.type.for-rent');
});
Route::get('/admin/type/sale', function () {
    return view('backend.type.for-sale');
});
Route::get('/admin/type/rental', function () {
    return view('backend.type.rental');
});
Route::get('/admin/amenity/edit', function () {
    return view('backend.amenity.edit-amenity');
});



Route::get('/agent/widget', function () {
    return view('crm.widget');
});
Route::get('/agent/dashboard', function () {
    return view('crm.layouts.dashboard');
});

Route::get('/agent/table', function () {
    return view('crm.table');
});
Route::get('/agent/property', function () {
    return view('crm.property');
});

Route::get('/agent/page/edit', function () {
    return view('crm.edit-user');
});
Route::get('/agent/page/add', function () {
    return view('crm.add-user');
});
Route::get('/agent/property/create', function () {
    return view('crm.add-property');
});
Route::get('/agent/property/edit', function () {
    return view('crm.edit-property');
});
Route::get('/agent/post', function () {
    return view('crm.post');
});
Route::get('/agent/profile', function () {
    return view('crm.profile');
});
Route::get('/admin', function () {
    return view('backend.layouts.dashboard');
});

Route::get('/admin/address/create', function () {
    return view('backend.address.create-address');
});
//  Route::get('/home', 'HomeController:class', ['index'])
Route::get('/user', function(){
    factory(\App\User::class, 3)->create(); //3 users
});

Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    
    

});
  Route::get('/agent/property', [PizzaController::class, 'index']);
  Route::get('/admin/user', [UserController::class, 'index']);
  Route::get('/admin/property', [ProductController::class, 'index']);

  Route::resource('/admin/addresses', AddressController::class);
  Route::resource('/admin/rooms', RoomController::class);
  Route::resource('/admin/amenities', AmenityController::class);
  
  



 
  
  

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});