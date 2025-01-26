<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\GubunController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChartController;

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
	return redirect(url('main'));
});

Route::resource('main', MainController::class);
Route::get('main/list/{id}', [MainController::class, 'list'])->name('main.list');
Route::get('main/detail/{id}', [MainController::class, 'detail'])->name('main.detail');
Route::get('main/category/{id}', [MainController::class, 'category'])->name('main.category');

Route::resource('admin', AdminController::class);
Route::get('admin/check', [AdminController::class, 'check'] );

Route::get('member', [MemberController::class, 'index']);
Route::resource('member', MemberController::class);
Route::resource('gubun', GubunController::class);

Route::resource('company', CompanyController::class);
Route::resource('concept', ConceptController::class);

Route::get('products/stock', [ProductController::class, 'stock']);
Route::resource('products', ProductController::class);

Route::resource('purchase', PurchaseController::class);
Route::resource('revenue', RevenueController::class);

Route::post('login/check', [LoginController::class, 'check'] );
Route::get('login/logout', [LoginController::class, 'logout'] );

Route::post('login/admin_check', [LoginController::class, 'admin_check'] );
Route::get('login/admin_logout', [LoginController::class, 'admin_logout'] );

Route::resource('chart', ChartController::class);