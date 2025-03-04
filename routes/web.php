<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProductAjaxController;
use App\Models\User;
use App\Models\Phone;

Route::get('/', function () {
    return view('welcome');
});

// Laravel Socialite
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::resource('products-ajax-crud', ProductAjaxController::class);
Route::get('/relationship', function () {
    $users = User::all();
    return view('relationship.index', compact('users'));
});









////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
