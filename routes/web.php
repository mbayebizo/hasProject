<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DepartConteneursController;
use App\Http\Controllers\PackageColisController;
use App\Http\Controllers\PlanificationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitePageController;
use App\Http\Controllers\TarificationsController;
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



Route::get('/',[SitePageController::class,'__index'])->name('site');
Route::get('/contact',[ContactsController::class,'index'])->name('contact');
Route::post('/contact',[ContactsController::class,'store'])->name('contact.store');
Route::get('/service',[ServiceController::class,'index'])->name('service');
Route::get('/groupage',[ServiceController::class,'service0'])->name('groupage');
Route::get('/conteneur',[ServiceController::class,'service1'])->name('conteneur');
Route::get('/garde',[ServiceController::class,'service2'])->name('garde');
Route::get('/envoi',[ServiceController::class,'service3'])->name('envoi');
Route::get('/tarification',[TarificationsController::class,'index'])->name('tarification');
Route::post('/planification',[PlanificationController::class,'planingColis'])->name('plan.add');
Route::get('/tarifByPays/{pays}',[TarificationsController::class,'selectProduit']);
Route::get('/tarification/{id}',[TarificationsController::class,'edit']);
Route::post('/tracking',[PackageColisController::class,'tracking'])->name('tracking');
Route::get('/imprimer/{id}',[PackageColisController::class,'imprimmerTicket']);


Route::get('/admin', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});


// ----------------------------- main dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('em/dashboard', [App\Http\Controllers\HomeController::class, 'emDashboard'])->name('em/dashboard');

// -----------------------------settings----------------------------------------//
Route::get('company/settings/page', [App\Http\Controllers\SettingController::class, 'companySettings'])->middleware('auth')->name('company/settings/page');
Route::get('roles/permissions/page', [App\Http\Controllers\SettingController::class, 'rolesPermissions'])->middleware('auth')->name('roles/permissions/page');
Route::post('roles/permissions/save', [App\Http\Controllers\SettingController::class, 'addRecord'])->middleware('auth')->name('roles/permissions/save');
Route::post('roles/permissions/update', [App\Http\Controllers\SettingController::class, 'editRolesPermissions'])->middleware('auth')->name('roles/permissions/update');
Route::post('roles/permissions/delete', [App\Http\Controllers\SettingController::class, 'deleteRolesPermissions'])->middleware('auth')->name('roles/permissions/delete');

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [App\Http\Controllers\UserManagementController::class, 'profile'])->middleware('auth')->name('profile_user');
Route::post('profile/information/save', [App\Http\Controllers\UserManagementController::class, 'profileInformation'])->name('profile/information/save');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::post('search/user/list', [App\Http\Controllers\UserManagementController::class, 'searchUser'])->name('search/user/list');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::post('user/delete', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth')->name('user/delete');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

// ----------------------------- search user management ------------------------------//
Route::post('search/user/list', [App\Http\Controllers\UserManagementController::class, 'searchUser'])->name('search/user/list');

// ----------------------------- form change password ------------------------------//
Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

//------------------------------test-----------------------------------------//
Route::get('word/{mot}', function ($mot) {
    return Hash::make($mot);
});
//------------------------------Good route-----------------------------------------//

Route::get('/messages',[ContactsController::class,'showallMessage'])->middleware('auth')->name('listesMessage');
Route::get('/messages/view/{id}',[ContactsController::class,'view'])->where('id', '[0-9]+')->middleware('auth')->name('message.view');
Route::get('/tarif',[TarificationsController::class,'showTarification'])->middleware('auth')->name('listTarification');
Route::get('addTarification',[TarificationsController::class,'addTarification'])->middleware('auth')->name('addTarification');
Route::post('updateTarification',[TarificationsController::class,'updateTarification'])->middleware('auth')->name('updateTarification');
Route::post("/deletetarif",[TarificationsController::class,'destroy'])->middleware('auth')->name('tarif/delete');
Route::get("/demandePlaning",[PlanificationController::class,'demandePlaning'])->middleware('auth')->name('demandePlaning');
Route::get("/planing",[PlanificationController::class,'listePlaning'])->middleware('auth')->name('listePlaning');
Route::get("/valide/{id}",[PlanificationController::class,'valide'])->where('id', '[0-9]+')->middleware('auth')->name('valide');
Route::get("/planing/{id}",[PlanificationController::class,'edit'])->where('id', '[0-9]+')->middleware('auth')->name('planingEdit');
Route::post("/enlever/",[PlanificationController::class,'enlever'])->middleware('auth')->name('enlever');
Route::get("/validationPlaning/{id}",[PlanificationController::class,'validationPlaning'])->middleware('auth')->name('validationPlaning');
Route::post('search/list', [PlanificationController::class, 'searchPlaning'])->name('search/planing/list');
Route::get('colisEnlever/{id}', [PlanificationController::class, 'colisEnlever'])->name('colisEnlever')->middleware('auth');
Route::get('suivieList', [PlanificationController::class, 'suivisList'])->name('suivieList')->middleware('auth');
Route::get('tracking/{id}',[PackageColisController::class,'tracking'])->middleware('auth');
Route::post('trackingUpdate',[PackageColisController::class,'trackingUpdate'])->middleware('auth')->name('trackingUpdate');
Route::get('suivie/{id}',[PackageColisController::class,'tarckingId'])->middleware('auth');
Route::resource('depart',DepartConteneursController::class)->middleware('auth')->except('destroy');
Route::post('updateDepart',[DepartConteneursController::class,'updateDepart'])->middleware('auth')->name('updateDepart');
Route::post("/deletedepart",[DepartConteneursController::class,'destroy'])->middleware('auth')->name('depart/delete');
Route::post('search/track/list', [PackageColisController::class, 'searchTraking'])->middleware('auth')->name('search/track/list');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
