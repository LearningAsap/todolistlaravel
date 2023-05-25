@extends('layouts.app')
@extends('inc.links')

@section('content')

<h1>Update Todo</h1>
<!-- <form action="{{ url('/', $todo->id) }}/update" method="POST"> -->
<form action="{{ url('/update', $todo->id) }}" method="POST">

    @csrf
   
    @method('POST')
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input  name= "text" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$todo->text}}" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <input  name= "body" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$todo->body}}" >
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Due Date</label>
            <input type="text" name="due" class="form-control" id="exampleFormControl1" placeholder="due date" value="{{$todo->due}}">
            </div>
            <button class="btn btn-primary">
                Update
            </button>
        </div>
    </div>        
   

</form>


@endsection
