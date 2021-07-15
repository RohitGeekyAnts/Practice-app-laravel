<?php

use App\Http\Controllers\MembersController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserAuth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('list', [MembersController::class, "dbOperations"]);
Route::get('checkout', [CheckoutController::class, "checkout"]);
Route::post('checkout', [CheckoutController::class, "afterPayment"])->name('checkout.credit-card');
// Route::get('list', [MemberController::class, 'show']);
// Route::get('delete/{id}', [MemberController::class, 'delete']);
// Route::get('edit/{id}', [MemberController::class, "showData"]);
// Route::post('edit', [MemberController::class, "update"]);
// Route::view('list', "list");
// Route::get('profile/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('profile');
// });
// Route::get('/add', function () {
//     return view('addmember');
// });
// Route::view('add', "addmember");

// Route::view('login', 'login');
// Route::view('profile', 'profile');
// Route::view('login', 'login');
// Route::post('user', [UserAuth::class, 'auth']);
    // Route::get('/logout', function () {
    //     if (session()->has('name')) {
    //         session()->pull('name', null);
    //     }
    //     return redirect('login');
    // });
    // Route::get('/login', function () {
    //     if (session()->has('name')) {
    //         return redirect('profile');
    //     }
    //     return view('login');
    // });