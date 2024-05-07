<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/login','components.auth.login');
Route::view('/register','components.auth.registration');
Route::view('/forgot-password','components.auth.reset-pass');
Route::view('/dashboard','components.dashboard.dashboard');
Route::view('/category','components.category.category');
Route::view('/create-category','components.category.create-category');
Route::view('/update-category','components.category.update-category');
Route::view('/subcategory','components.subcategory.subcategory');
Route::view('/create-subcategory','components.subcategory.create-subcategory');
Route::view('/update-subcategory','components.subcategory.update-subcategory');
Route::view('/product','components.product.product');
Route::view('/create-product','components.product.create-product');
Route::view('/update-product','components.product.update-product');
Route::view('/brand','components.brand.brand');
Route::view('/create-brand','components.brand.create-brand');
Route::view('/update-brand','components.brand.update-brand');
Route::view('/order','components.order.order');
Route::view('/order-detail','components.order.order-detail');
Route::view('/customer','components.customer.customer');
Route::view('/create-customer','components.customer.create-customer');
Route::view('/update-customer','components.customer.update-customer');
Route::view('/pages','components.pageBuilder.page');
Route::view('/create-pages','components.pageBuilder.create-page');
Route::view('/update-pages','components.pageBuilder.update-page');








