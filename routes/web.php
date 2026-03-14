<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/evenements',[EvenementController::class]);
/**
 * action index : routeName : evenements.index  -> uri : /evenements -> http method : get
 * action show : routeName   : evenements.show  ->uri :/evenements/{id} -> http method : get
 * 
 * action edit : routeName   : evenements.edit  ->uri :/evenements/{id}/edit -> http method : get
 * 
 * action destroy  : routeName : evenements.destroy  ->uri : /evenements/{id}  ->http method : delete
 * 
 */