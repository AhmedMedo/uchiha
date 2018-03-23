<?php
use Intervention\Image\ImageManagerStatic as Image;
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

Route::get('user/verify/{verification_code}', 'AuthController@verifyUser');
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/reset', 'Auth\PasswordController@reset');
Route::get('mail', function () {
Rout::get('a',function (){
    return 'a';

});
    Rout::get('b',function (){
        return 'b';

    });
    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('welcome', $data, function ($message) {

        $message->from('ahmed.alaa.eldin.hamdy@gmail.com', 'Learning Laravel');

        $message->to('ahmed.medo3061993@gmail.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});

// Route::get('/', function()
// {
//     $img = Image::make('86.jpg')->resize(500, 200);

//     return $img->response('jpg');
// });