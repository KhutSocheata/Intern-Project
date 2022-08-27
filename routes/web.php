<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;

//frontend
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\DetailController;
use App\Http\Controllers\frontend\AgentController;
use App\Http\Controllers\frontend\ForRentController;
use App\Http\Controllers\frontend\ForRentalController;
use App\Http\Controllers\frontend\ForSaleController;
use App\Http\Controllers\frontend\EditProfileController;
use App\Http\Controllers\frontend\ProfileController;

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



//  Route::get('/home', 'HomeController:class', ['index'])
Route::get('/user', function(){
    factory(\App\User::class, 3)->create(); //3 users
});


//front end

Route::resource('/blog', BlogController::class);
Route::resource('/contact', ContactUsController::class);
Route::resource('/detail', DetailController::class);
Route::resource('/agent', AgentController::class);
Route::resource('/propertyRent', ForRentController::class);
Route::resource('/propertyRental', ForRentalController::class);
Route::resource('/propertySale', ForSaleController::class);
Route::get('editprofile', [UserController::class, 'edit_profile']);

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
  
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
    
    
    Route::resource('/admin/addresses', AddressController::class);
    Route::resource('/admin/rooms', RoomController::class);
    Route::resource('/admin/amenities', AmenityController::class);
    Route::resource('/admin/properties', PropertyController::class);
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/rents', RentController::class);
    Route::resource('/admin/sales', SaleController::class);
    Route::resource('/admin/rentals', RentalController::class);
    
    
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    
    // Route::resource('/agent/contacts', ContactController::class);
   // Route::resource('/agent/posts', PostController::class);
   Route::resource('/manager/contacts', ContactController::class);
   Route::resource('/manager/posts', PostController::class);
   
    
    
    
});


    Route::get('singer/create', [SingerController::class, 'create'])->name('singer.create');
    Route::get('singer/{singer}', [SingerController::class, 'show'])->name('singer.show');
    Route::get('song/singer/{singer}', [SingerController::class, 'removeSinger'])->name('song.singer.delete');
// Route::get('category/product/{product}', 'ProductController@removeCategory')->name('category.product.delete');
    Route::get('/editprofile',[ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::put('/editprofile',[ProfileController::class, 'update_profile'])->name('update_profile');

    Route::get('/editpassword', [ProfileController::class, 'changePassword'])->name('change-password');
    Route::post('/editpassword', [ProfileController::class, 'updatePassword'])->name('update-password');
