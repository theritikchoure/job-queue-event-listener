<?php

use App\Events\SomeoneCheckedProfile;
use App\Jobs\SendMail;
use App\Models\User;
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

Route::get('/test', function(){

    $detail = ['email' => 'recipient@gmail.com'];
    SendMail::dispatch($detail);

});

Route::get('/detest', function(){

    $detail = ['email' => 'recipient@gmail.com', 'name' => 'Ritik'];
    $emailjob = (new SendMail($detail))->delay(now()->addSeconds(5));
    dispatch($emailjob);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', function () {

    $user = User::inRandomOrder()->first();
    event(new SomeoneCheckedProfile($user));
    return $user->name;
});

