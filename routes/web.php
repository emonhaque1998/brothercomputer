<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserInformationController;

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

Route::get('/', function () {
    return view('home');
});
Route::post('/emon', function (Request $request) {
    $userData = User::where('fName','LIKE',"%{$request->searchValue}%")->get();
    return $userData;
});

//dashboard information
Route::get('/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('dashboard');

//profile information
Route::get('/profile-edit', function () {
    return view('page.admin.profile-edit');
})->middleware(['auth', 'verified'])->name('profile-edit');

//Users information
Route::middleware("auth")->group(function (){
    Route::get("/all-users", [UserInformationController::class, 'allUsersPage'])->name('allUsers');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
