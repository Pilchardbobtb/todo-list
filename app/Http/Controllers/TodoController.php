<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Todo;
    use Illuminate\Support\Facades\Session;
    
    class TodoController extends Controller
    {
        public function index()
        {
            $todos = Session::get('todos', []);
    
            return view('todo.index', compact('todos'));
        }
    
        public function store(Request $request)
    {
        $todo = $request->input('todo');
        $todos = Session::get('todos', []);
        array_unshift($todos, $todo);
        Session::put('todos', $todos);

        return redirect('/');
    }
    }
    

    
    
        