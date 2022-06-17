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


/*auth*/

Auth::Routes();





Route::get('/home','\App\Http\Controllers\Homecontroller@index')->name('home');
Route::get('/', '\App\Http\Controllers\HomeController@index');


Route::get('product-detials/{id}' , '\App\Http\Controllers\HomeController@productDetailes');
Route::get('category-wise-product/{id}' , '\App\Http\Controllers\HomeController@categoryWiseProduct');








//add to cart

Route::get('cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'addToCart']);
Route::get('remove/{id}', [App\Http\Controllers\CartController::class, 'removeCart']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart']);
Route::get('checkout' , '\App\Http\Controllers\HomeController@Checkout');
Route::get('user-login' , '\App\Http\Controllers\UserController@UserLogin');
Route::post('user-login-post', [App\Http\Controllers\UserController::class, 'UserLoginPost']);

Route::get('user-register' , '\App\Http\Controllers\UserController@UserRegister');
Route::post('user-register' , '\App\Http\Controllers\UserController@UserRegisterStor');


/*payment getway*/

Route::get('stripe', [App\Http\Controllers\StripeController::class, 'stripe']);
Route::post('stripe', [App\Http\Controllers\StripeController::class, 'stripePost']);

/*payment getway close*/



/*dashboard logout*/
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*user logout*/ 
Route::post('user-logout', '\App\Http\Controllers\UserController@logout');

Route::middleware(['CheckAuth'])->group(function () {

Route::get('/dashboard',function(){
return view('backend.dashboard');
});


Route::get('/form-elements',function(){

    return view('backend.form-elements');
});


//catagory related routs

Route::get('/category','\App\Http\Controllers\categoryController@index');
Route::get('category/add-new','\App\Http\Controllers\categoryController@addNew');
Route::post('category/stor','\App\Http\Controllers\categoryController@Stor');
Route::get('category/edit/{id}','\App\Http\Controllers\categoryController@Edit');
Route::post('category/update','\App\Http\Controllers\categoryController@Update');
Route::get('category/delete/{id}','\App\Http\Controllers\categoryController@delete');









//sub catagory related routs

Route::get('/sub-category','\App\Http\Controllers\SubCategoryController@index');
Route::get('sub-category/add-new','\App\Http\Controllers\SubCategoryController@addNew');
Route::post('sub-category/stor','\App\Http\Controllers\SubCategoryController@Stor');
Route::get('sub-category/edit/{id}','\App\Http\Controllers\SubCategoryController@Edit');
Route::post('subcategory/update','\App\Http\Controllers\SubCategoryController@Update');
Route::get('subcategory/delete/{id}','\App\Http\Controllers\categoryController@delete');



//products related routs

Route::get('/product','\App\Http\Controllers\ProductController@index');
Route::get('product/add-new','\App\Http\Controllers\ProductController@addNew');
Route::get('product/edit/{id}','\App\Http\Controllers\productController@Edit');
Route::post('product/update','\App\Http\Controllers\productController@Update');
Route::get('product/delete/{id}','\App\Http\Controllers\productController@delete');



Route::post('/product/subcategory','\App\Http\Controllers\ProductController@getSubcategory');
Route::post('product/store','\App\Http\Controllers\ProductController@Store');












/*wishlist*/
Route::get('/wishlist','\App\Http\Controllers\Homecontroller@wishlist') ;









});