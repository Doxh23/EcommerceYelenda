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
//client route
Route::get('/', [\App\Http\Controllers\AuthController::class, "index"])->name("welcome");
Route::prefix("auth")->controller(\App\Http\Controllers\AuthController::class)->group(function () {

    Route::get("/login", "login")->middleware("guest")->name("auth.login");
    Route::post("/login", "doLogin");
    Route::delete("/logout", "logout")->middleware("auth")->name("auth.logout");
    Route::get("/register", "register")->middleware("guest")->name("auth.register");

});
Route::prefix("products")->middleware("auth")->controller(\App\Http\Controllers\productController::class)->group(function () {

    Route::get("/", "index")->name("product.index");
    Route::get("/{id}", "product")->name("product.product");
});


Route::prefix("cart")->middleware("auth")->controller(\App\Http\Controllers\cartController::class)->group(function () {

    Route::get("/", "index")->name("cart");
    Route::post("/addToCard/{id}/{qty}", "addToCard")->name("cart.addtocart");
});
//admin Route
