@extends('layouts.app')
@extends('inc.links')

@section('content')

<h1>Create Todo</h1>
<form action="{{ url('/') }}/todos" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input  name= "text" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1"  placeholder="Please write text here" rows="3"></textarea>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Due date</label>
            <input type="text" name="due" class="form-control" id="exampleFormControlInput1" placeholder="due date">
            </div>
            <button class="btn btn-primary">
                submit
            </button>
        </div>
    </div>        

</form>


@endsection
