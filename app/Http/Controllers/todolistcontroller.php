<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use PhpParser\Node\Stmt\Return_;

class todolistcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
       
       $todos=todo::orderby('created_at','desc')->get();
        return view('todos.index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
        public function store(Request $request)
{
    
    $validatedData = $request->validate([
        'text' => 'required',
        'body' => 'required',
        'due' => 'required',
    ]);

    $todo = new Todo;
    $todo->text = $validatedData['text'];
    $todo->body = $validatedData['body'];
    $todo->due = $validatedData['due'];

    $todo->save();

    // // Redirect or return a response
    // // For example, redirect to a success page
    return redirect('/');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $todos=todo::find($id);
        return view('todos.show')->with('todo',$todos);
       
    

    // Other code to pass the model data to the view or perform other operations

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $todos=todo::find($id);
         return view('todos.edit')->with('todo',$todos);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        
        $todo = Todo::find($id);

    // Update the todo with the new values
    $todo->text = $request->input('text');
    $todo->body = $request->input('body');
    $todo->due = $request->input('due');

    // Save the updated todo
    $todo->save();

    // Return a response or redirect as needed
    return redirect('/')->with('success', 'Todo Updated successfully');;
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            // Handle case when the todo is not found
            return redirect()->back()->with('error', 'Todo not found');
        }
    
        $todo->delete();
    
        // Redirect to the index page or any other desired page
        return redirect('/')->with('success', 'Todo deleted successfully');
    }
}
