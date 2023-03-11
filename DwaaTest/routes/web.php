<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LcalizationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\ApplicationController;

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

Route::get('/', function () {return view('auth.login');});
Route::get('/login', function () {return view('auth.login');});
Auth::routes();

/////////////////////////////////////////////[HR Manager Routes]/////////////////////////////////////////////////////
Route::middleware(['auth','user-role:HRManager'])->group(function()
{
Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
//************************************************prfile Route ****************************************************/
Route::get('/admin/profile', [AdminController::class, 'Profile'])->name('admin.profile');
Route::post('/admin/profile/update', [AdminController::class, 'update'])->name('admin.profile.update');
//***********************************************HR Coordinator in admin Route ************************************/
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::post('/users/store', [UsersController::class, 'store'])->name('user.store');
Route::get('/users/show', [UsersController::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('user.edit');
Route::post('/users/update', [UsersController::class, 'update'])->name('user.update');
Route::get('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('user.destroy');
//**********************************************Application accept and Reject**************************************/
Route::get('Applications/admin', [ApplicationController::class, 'showAppInAdmin'])->name('App.admin');
Route::get('/AdminAccept/{id}', [ApplicationController::class, 'AdminAcceptionOperation']);
Route::get('/AdminReject/{id}', [ApplicationController::class, 'AdminRejctionOperation']);
});

////////////////////////////////////////////////[Hr Coordinator Routes]///////////////////////////////////////////////
Route::middleware(['auth','user-role:HRCoordinator'])->group(function()
{
//*******************************************loclization***********************************************************/
Route::get("locale/{lang}", [LcalizationController::class, 'setLang']);
//******************************************HR Coordinator prfile Route *******************************************/
Route::get('/profile/', [HRController::class, 'index'])->name('profile');
Route::put('/profile/update/', [HRController::class, 'update'])->name('profile.update');
//*********************************************application Acception or Rejction***********************************/
Route::get('home/', [ApplicationController::class, 'showAppInCoordinator'])->name('App.show');
Route::get('/CoordinatorAccept/{id}', [ApplicationController::class, 'CoordinatorAcception']);
Route::get('/CoordinatorReject/{id}', [ApplicationController::class, 'CoordinatorRejction']);
Route::get('Reports/', [ApplicationController::class, 'ReportAllApplication'])->name('App.Reports');
});
////////////////////////////////////////////////[Application Routes]///////////////////////////////////////////////////

Route::get('/Application', [ApplicationController::class, 'index'])->name('App');
Route::post('/Application/Submit', [ApplicationController::class, 'submit'])->name('App.submit');