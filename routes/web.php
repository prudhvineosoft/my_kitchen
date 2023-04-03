<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('/');


Route::get('/dashboard', function () {
   // return Inertia::render('Dashboard');
    $userId = Auth::id();
    $user = User::find($userId);
    if ($user->hasRole('admin')) {
        return Inertia::render('Dashboard',['user' => $user]);
    } elseif ($user->hasRole('client')) {
       return Inertia::render('Dashboard',['user' => $user]);
    } elseif ($user->hasRole('user')) {
      return Inertia::render('UserDashboard',['user' => $user]);
    }
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware(['auth',  'role:admin'])->group(function() {
// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth',  'role:user'])->group(function() {
//     Route::get('/user', function () {
//     return Inertia::render('UserDashboard');
// })->middleware(['auth', 'verified'])->name('user');
// });

require __DIR__ . '/auth.php';
