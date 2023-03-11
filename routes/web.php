<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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





Route::group(['middleware' => ['auth']], function () {

    Route::get('/video-chat', function () {
        // fetch all users apart from the authenticated user
        $users = User::where('id', '<>', Auth::id())->get();
        return view('video-chat', ['users' => $users]);
    });

    // Endpoints to alert call or receive call.
    Route::post('/video/call-user', 'App\Http\Controllers\VideoChatController@callUser');
    Route::post('/video/accept-call', 'App\Http\Controllers\VideoChatController@acceptCall');

    // Agora Video Call Endpoints
    Route::get('/agora-chat', 'App\Http\Controllers\AgoraVideoController@index');
    Route::post('/agora/token', 'App\Http\Controllers\AgoraVideoController@token');
    Route::post('/agora/call-user', 'App\Http\Controllers\AgoraVideoController@callUser');


    // WebRTC Group Call Endpoints
    // Initiate Stream, Get a shareable broadcast link
    Route::get('/streaming', 'App\Http\Controllers\WebrtcStreamingController@index');
    Route::get('/streaming/{streamId}', 'App\Http\Controllers\WebrtcStreamingController@consumer');
    Route::post('/stream-offer', 'App\Http\Controllers\WebrtcStreamingController@makeStreamOffer');
    Route::post('/stream-answer', 'App\Http\Controllers\WebrtcStreamingController@makeStreamAnswer');
});

/**
 * When you clone the repository, comment out
 *  Auth::routes(['register' => false]);
 * and uncomment
 *   Auth::routes()
 * so that you can register new users. I disabled the registration endpoint so that my hosted demo won't be abused.
 *
 */
// Auth::routes();
Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('website.home');
})->middleware('guest')->name('website.home');

Route::prefix('/admin')->middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('doctors','App\Http\Controllers\Admin\DoctorsController');

});

Route::prefix('/doctor')->middleware(['auth', 'user-access:doctor'])->group(function () {

    Route::get('/home', [HomeController::class, 'doctorHome'])->name('doctor.home');


});

Route::middleware(['auth', 'user-access:patient'])->group(function () {

    Route::get('/home', [HomeController::class, 'patientHome'])->name('patient.home');


});


Route::get('/doctors','App\Http\Controllers\Website\DoctorController@index')->name('patient.doctor');

Route::get('/Course','App\Http\Controllers\Website\DoctorController@getCour')->name('patient.course');

Route::get('/{page}', 'AdminController@index');
