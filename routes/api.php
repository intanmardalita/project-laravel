<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ute / jalan/ jalur
Route::get("hello", function(){
    return '<h1>Hello  Laravel</h1>';
}); 

//rute api sederhana
Route::get('get-data',  function(){
    return response()->json(
        'hello word'
    );
});


//rute api sederhana
Route::get('get data', function (){
    return response()->json
    [
        'data'=> 'siswa'
        'nama'=>'hendro'
        'data'=>[
            'sekolah'=>'SMKN  2 Jakarta'
        ],
        'siswa'=>[
            'nama'=>'hendro'
            'kelas'=> 'X PPLG1'

            'ortu'[
                'nama bapak'=>'samsudin'
                'no telp'=>'0858kapan2 kedupan'
                
        ],

    ]
})
