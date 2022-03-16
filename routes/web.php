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
// Route::get('/testing/{type}/{rowsCount?}', function($type,$rowsCount = 20){
//     echo "<pre>";
//     print_r(\DB::table($type)->take($rowsCount)->get()->toArray());
// });

Route::get('/', function () {
    return redirect()->route('admin.login');
});

Route::get('/testmanager', function () {
    echo "<h1>Contacts Count ".Contacts::count()."</h1><br>";
    phpinfo();
});

Route::group(['middleware' => ['XSS']], function () {
        Route::name('admin.')->controller(Admincontroller::class)->group(function () {
            Route::get('/login', 'adminLogin')->name('login')->middleware('guest');
            Route::post('/ad-login', 'login');
            Route::group(['middleware' => ['auth']], function () {
                Route::get('/dashboard', 'getCampaingn')->name('read.campaigns');
                Route::post('/createCampaingn', 'createCampaingn')->name('create.post.campaign');
                Route::get('/campaingn-detail/{id}', 'CampaingnDetail')->name('edit.campaign');
                Route::post('/update-Campaingn', 'updateCampaingn')->name('update.campaign');
                Route::get('/campaingn-delete/{id}', 'deleteCampaingn')->name('delete.campaign');
                Route::get('/create-campaign-view', function () {
                    return view('Admin.campaign');
                })->name('create.campaign');

                Route::get('/schedule-queue-on-emails/{id}/{year}', 'SendAllEmailsInQueue')->name('schedule.emails');
                Route::post('/contact', 'createContacts')->name('create.contacts');
                //Route::get('/schedule-queue-for-pendings-email/{id}/{year}', 'SendAllPendingEmailsInQueue')->name('reschedule.emails');
                Route::get('/contact-detail', 'ContactDetailAccordingDate')->name('contact.detail');
                Route::get('/importView/{id}', 'importView')->name('detail.campaign');
                Route::post('/import-contacts', 'importContacts')->name('import.contacts');
                Route::get('/logout','logout');
            });
        });
});
