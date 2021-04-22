<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route:: get('/index', function(){
    return view('index');
    })->name('index.html');
    
Route::get ('/menu',  function(){
    return view('menu');
})->name('menu.html');

Route::get('/blog', function () {
return view('blog');
})->name('blog.html');

Route::get('/contact', function () {
return view('contact');
})->name('contact.html');

Route::get('index/{lang}', function($lang){
    App::setlocale($lang);
    return view('index');
});

Route::get('menu/{lang}', function($lang){
    App::setlocale($lang);
    return view('menu');
});

Route::get('blog/{lang}', function($lang){
    App::setlocale($lang);
    return view('blog');
});

Route::get('contact/{lang}', function($lang){
    App::setlocale($lang);
    return view('contact');
});

Route::get('/mail', 'MailController@index');
Route::get('/sendemail/send', 'MailController@send');

Route::get('/cafe','CafeController@index');
Route::post('/cafe','CafeController@store')->name('addImage');
