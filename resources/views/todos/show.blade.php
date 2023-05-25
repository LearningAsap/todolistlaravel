@extends('layouts.app')

@section('content')

<a class="btn btn-secondary" href="/">Go Back</a>
<div class="card">
    <div class="card-body">
        <h1>{{$todo->text}}</h1>
        <span class="label bg-danger">{{$todo->due}}</span>
        <p class="label-group">{{$todo->body}}</p>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-6">
        <a href="{{$todo->id}}/edit" class="btn btn-primary">Edit</a>
    </div>
    <div class="col-md-6">
        <form action="{{ route('todo.destroy', $todo->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this todo?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

@endsection
