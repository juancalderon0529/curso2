<?php

use App\Admin\Controllers\ProductController;
use App\Http\Controllers\Admin\BodegaController;
use App\Http\Controllers\CajasController;
use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Facades\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function () {
    Route::get('/', [\App\Admin\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('products', ProductController::class);
    Route::get('bodega', [BodegaController::class, 'index'])->name('admin.bodega');
    Route::get('cajas', [CajasController::class,'index'])->name('admin.cajas');

});

