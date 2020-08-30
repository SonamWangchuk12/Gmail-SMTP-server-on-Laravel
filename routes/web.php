<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function(){
	return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', array('as'=>'product.index','uses'=>'TestController@index'));
Route::get('/products/add', array('as'=>'product.add','uses'=>'TestController@add'));
Route::post('/products/insert', array('as'=>'product.insert','uses'=>'TestController@insert'));
Route::get('/products/show/{id}', array('as'=>'product.show','uses'=>'TestController@show'));
Route::get('/products/edit/{id}', array('as'=>'product.edit','uses'=>'TestController@edit'));
Route::post('/products/update/{id}', array('as'=>'product.update','uses'=>'TestController@update'));
Route::get('/products/delete/{id}', array('as'=>'product.delete','uses'=>'TestController@delete'));

// Route::post('/products/enquiry', 'TestController@addContact')->name('enquiry');

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from Rahul',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('rahulpassi925@gmail.com')->send(new \App\Mail\Mailer($details));
   
    dd("Email is Sent.");
});
Route::get('/products/enquiry', 'EmailController@index');
Route::post('/products/enquiry', 'EmailController@send')->name('send-enquiry');
/*Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from Rahul',
        'body' => '<table>
        <tr>
        <td>Name</td>
        <td>{{$name}}</td>
        </tr>
        <tr>
        <td>Name</td>
        <td>{{$subject}}</td>
        </tr>
        <tr>
        <td>Name</td>
        <td>{{$message}}</td>
        </tr>
        </table>'
    ];
    \Mail::to('rahulpassi925@gmail.com')->send(new \App\Mail\Mailer($details));
   
    dd("Email is Sent.");
});*/