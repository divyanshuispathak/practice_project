<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/demo/{name}/{id?}', function($name, $id=null){
    // $name = 'Divyanshu Pathak';
    // $data = compact('name', 'id');
    // return view('/demo')->with($data);
    return view('/demo', compact('name', 'id'));
});

Route::post('/test', function(){
    echo "Hey divyanshu";
});

Route::get('/home/{name?}', function($name = null){
    $demo = "<h2>Practice-Project</h2>";
    return view('home', compact('name', 'demo'));
});

Route::get('/', function(){
    return view('welcome');
});

Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

Route::get('/customer', function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers);
});