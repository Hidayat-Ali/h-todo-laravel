<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    }
    public function create()
    {
        return view('create');
    }
    public function edit(Todo $todo)
    {
        return view('edit')->with('todos',$todo);
    }
    public function delete(Todo $todo)
    {
        $todo->delete();
        session()->flash('success', 'Todo deleted succesfully');
       return redirect('/');
    }
    public function detail(Todo $todo)
    {

        return view('details')->with('todos', $todo);
    }
    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);
        $todos = request()->all();
        $todo->name = $todos['name'];
        $todo->description = $todos['description'];
        $todo->save();
        session()->flash('success', 'Todo updated succesfully');
        return redirect('/');
    }

    public  function store(Request $request)
    {
        $todos = new Todo();
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|max:250'

        ]);
        $todos->name = $request->name;
        $todos->description = $request->description;
        $todos->save();
        session()->flash('success', 'Todo created succesfully');
        return redirect('/');
    }
}
