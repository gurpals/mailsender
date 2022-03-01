<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Http;
use App\Jobs\SendEmailJob;


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
     return view('Admin.login');
 });

Route::group(['middleware' => ['XSS']], function () {

    Route::GET('/admin-login', [Admincontroller::class, 'adminLogin'])->name('login')->middleware('guest');
    Route::POST('/ad-login', [Admincontroller::class, 'login']);
    Route::group(['middleware' => ['auth']], function () {
            Route::GET('/home', [Admincontroller::class, 'getContacts'])->middleware('auth');
            Route::POST('/contact', [Admincontroller::class, 'createContacts']);
            Route::get('/resent-email/{id}', [Admincontroller::class, 'resentEmail']);
           
           
               /*campaings*/

            Route::POST('/createCampaingn', [Admincontroller::class, 'createCampaingn']);
            Route::GET('/campaingn-detail/{id}', [Admincontroller::class, 'CampaingnDetail'])->middleware('auth');
             Route::POST('/update-Campaingn', [Admincontroller::class, 'updateCampaingn']);
          
            Route::GET('/campaingn-delete/{id}', [Admincontroller::class, 'deleteCampaingn']);
            Route::GET('/create-campaign-view', function () {
             return view('Admin.campaign');
            });

            Route::GET('/getCampaingn', [Admincontroller::class, 'getCampaingn']);
            Route::GET('/importView/{id}', [Admincontroller::class, 'importView']);
            Route::POST('/import-contacts', [Admincontroller::class, 'importContacts']);
            //Route::POST('/account-setting', [Admincontroller::class, 'accountSetting'])->middleware('auth');

            
            Route::get('/logout',[Admincontroller::class,'logout']);
        });

});
