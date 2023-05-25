
@extends('layouts.app')
    
    @section('content')
    <h1> todos</h1>
    @if(count($todos)>0)
        @foreach ($todos as $todo)
        
        <div class="card ">
            <div class="card-body">
            <h3> <a href="todo/{{$todo->id}}">{{$todo->text}} </a></h3>
            <span class="label bg-danger"> {{$todo->due}}</span>
            </div>
        </div>
        @endforeach
    
    @endif
    @endsection