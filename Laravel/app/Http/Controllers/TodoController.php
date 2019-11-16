<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::latest()->paginate(5);

        return view('todos.index',compact('todos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Todo::create($request->all());

        return redirect()->route('todos.index')
                        ->with('success','Todo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index')
                        ->with('success','Todo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')
                        ->with('success','Todo deleted successfully');
    }
}
