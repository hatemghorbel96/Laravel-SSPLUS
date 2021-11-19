<?php

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
    $event = DB::table('evenments')->get()[0];
    return view('welcome',compact('event'));
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('index');
});



Route::post('/register', function () {

    $user = new App\User;
    $user->email = Input::get('email');
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
    $yourEmail = Input::get('email');

    return view('thanks')->with('yourEmail',$yourEmail);
});
Route::get('/login1', 'clientAuth@showUserLogin')->name("clientLoginPage");
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    if (Auth::check()) {
        return Redirect::intended('/home');
    }
    return view('admin');
});
Route::get('/contact', function () {
    $event = DB::table('evenments')->get()[0];
    return view('contact',compact('event'));
});
Route::get('/about', function () {
    $event = DB::table('evenments')->get()[0];
    return view('about',compact('event'));
});




Route::post('/login', function () {
    $credential= Input::only('username','password');
    if (Auth::attempt($credentials)) {
        return Redirect::intended('/');
    }
        return Redirect::intended('/login');

});

Route::get('/logout',function() {
Auth::logout();
    Session::flush();
return view ('logout');
});



Route::get('member', function () {
    // Only authenticated users may enter...
    return view('member');
})
    ->middleware('auth');

Auth::routes();
route::resource('clientt','ClientController');
route::resource('emp','EmployerController');
route::resource('contratt','ContratController');
route::resource('userRec','ReclamationController');
route::resource('interAdmin','InterventionController');
route::resource('fichierClient','FichierController');
route::resource('Evenment','EvenmentController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/calend', 'InterventionController@calend')->name('calend');

//client   Login

Route::post('/userloginaction', 'clientAuth@clientLogin')->name("clientLogin");
Route::group(['middleware' => 'checkuser'], function (){

    Route::get('/client', 'clientAuth@clientLogin')->name('client');
    Route::get('/client/contrat', 'clientAuth@contrat')->name('contrat');
    Route::get('/client/calendar', 'clientAuth@calendar')->name('calendar');
    Route::get('/client/fileintervention', 'clientAuth@intervention')->name('intervention');
    Route::get('/client/intervention', 'clientAuth@interventions')->name('interventions');
    Route::get('/client/reclamation', 'clientAuth@reclamation')->name('reclamation');
    Route::post('/reclamation', 'clientAuth@storeRec')->name('storeRec');
    Route::get('updateInt/{id_inter}', 'clientAuth@updateInt')->name('updateInt');
    Route::post('updateInt/{id_inter}', 'clientAuth@updateInt')->name('updateInt');
});