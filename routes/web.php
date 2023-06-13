<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Same function as the TodoController
Route::get('/', function () {
    $todos = Session::get('todos', []);
    return view('todo.index', compact('todos'));
});
// Same function as the TodoController
Route::post('/todo', function (Illuminate\Http\Request $request) {
    $todo = $request->input('todo');
    $todos = Session::get('todos', []);
    array_unshift($todos, $todo);
    Session::put('todos', $todos);
    return redirect('/');
});

Route::get('/clear', function () {
    Session::forget('todos');
    return redirect('/');
});


