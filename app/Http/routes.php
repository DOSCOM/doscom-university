<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/telegram', 'PesertaController@telegram');


Route::get('/', function(){
  return view('app-homepage');
});
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);
//authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/injection', 'PesertaController@index');


//pendaftaran du
Route::get('daftar','PesertaController@create');
Route::post('daftar','PesertaController@store');




Route::get('pembayaran','PesertaController@pembayaran');

// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
  Route::get('peserta','PesertaController@index');
  Route::get('coba-coba','PesertaController@cobacoba');

    //logs
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
  // LUNASI

  Route::get('peserta/lunasi/{id}','PesertaController@lunasi');
  Route::get('peserta/batal-lunasi/{id}','PesertaController@batal_lunasi');
  // Anak Bootcamp
  Route::get('peserta/anak-bootcamp/bukan/{id}', 'PesertaController@bukan_anak_bootcamp');
  Route::get('peserta/anak-bootcamp/iya/{id}', 'PesertaController@anak_bootcamp');
  // Edit Detail Peserta
  Route::get('peserta/edit/{id}' , 'PesertaController@edit');
  // Update detail peserta
  Route::post('peserta/update','PesertaController@update');


  // Delete Peserta
  Route::get('peserta/delete/{id}','PesertaController@destroy');
    // show new post form
    Route::get('new-post','PostController@create');
    // save new post
    Route::post('new-post','PostController@store');
    // edit post form
    Route::get('edit/{slug}','PostController@edit');
    // update post
    Route::post('update','PostController@update');
    // delete post
    Route::get('delete/{id}','PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts','UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts','UserController@user_posts_draft');
    // add comment
    Route::post('comment/add','CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}','CommentController@distroy');
});
//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

// Login dan Logut
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Daftar
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/register', 'Auth\AuthController@getRegister');
