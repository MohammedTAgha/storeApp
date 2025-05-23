<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('frontend.home.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
// Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/myaccount', [HomeController::class, 'myAccount'])->name('myAccount');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'namespace' => 'Admin',
    'middleware' => ['auth', 'is_admin']
], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
    Route::get('/orders/download/excel', [\App\Http\Controllers\Frontend\OrderController::class, 'downloadOrdersExcel'])
    ->name('orders.download.excel');

    Route::get('/orders/{order}/download/excel', [\App\Http\Controllers\Frontend\OrderController::class, 'downloadOrderExcel'])
    ->name('orders.download.order.excel');
});


// costomer routes 

// routes/web.php

Route::group(['namespace' => 'Frontend'], function () {
    // Home
    // Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/products', [FrontendProductController::class, 'index'])->name('products');

    // Products
    Route::get('/products', [FrontendProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [FrontendProductController::class, 'show'])->name('products.show');

    Route::middleware(['auth'])->group(function () {
        
   
      // Cart
      Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
      Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
      Route::put('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
      Route::delete('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');
  
      // Orders
      Route::get('/orders', [FrontendOrderController::class, 'index'])->name('orders.index');
      Route::get('/checkout', [FrontendOrderController::class, 'checkout'])->name('orders.checkout');
      Route::post('/orders', [FrontendOrderController::class, 'store'])->name('orders.store');
      Route::get('/orders/{order}', [FrontendOrderController::class, 'show'])->name('orders.show');

      Route::get('/orders/download/excel', [\App\Http\Controllers\Frontend\OrderController::class, 'downloadOrdersExcel'])
    ->name('orders.download.excel');

    Route::get('/orders/{order}/download/excel', [\App\Http\Controllers\Frontend\OrderController::class, 'downloadOrderExcel'])
        ->name('orders.download.order.excel');
    });


    // Cart
    // Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    // Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
    // Route::put('/cart/{cartItem}', [CartController::class, 'update'])->name('cart.update');
    // Route::delete('/cart/{cartItem}', [CartController::class, 'destroy'])->name('cart.destroy');

    // Orders
    // Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    // Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    // Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});


// Route::get('/login', function () {
//     return view('auth.login')->name('login');
// }); 
// for all
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])   ;
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
