<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


Route::get('/', function () {
    // return view('hello world');

    return 'hello world...1';
});

Route::get('/', function () {
    // return view('hello world');

    return 'hello world...2';
});

// Route::get('/etudiant', function (Request $request) {
//     // return view('hello world');
//     dump($request);
//     $name=$_GET['name'] ?? "aucun nom";
//     $age=$_GET['age']?? "pas d'age";

//     return "etudiant $name $age ans";
// });

// Route::get('/etudiant', function (Request $request) {
//     // return view('hello world');
//     //dump($request);
//     $name=$request->input('name');
//     $age=$request->input('age',-1);

//     return "etudiant $name $age ans";
// });

Route::post('/etudiants', function () {
    // return view('hello world');

    return 'liste des etudiants.';
});

Route::get('/etudiant/{id}/{name}', function (int $id,string $name) {
    // return view('hello world');

    return "Etudiants N° $id - $name";
    
})->where('id','[0-9]+')->where('name','[a-zA-Z]+');


Route::get('/users', function () {
    //  return ('hello');

    $users= DB::table('users')->distinct()->get()->first();

    return "liste des users : ";
    
});



