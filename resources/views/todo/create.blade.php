@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row pb-3">
        <div class="col-6 offset-2">
            <h1>Create New Todo</h1>
        </div>
    </div>
        <form action="/todo" method="post">
        @csrf
        
        <div class="row">
            <div class="col-6 offset-2">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title">
                    <small id="titleHelp" class="form-text text-muted">Enter your todo title</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-2">
                <div class="form-group">
                    <label for="text">Todo text</label>
                    <input type="text" class="form-control" id="text" aria-describedby="textHelp" name="text">
                    <small id="textHelp" class="form-text text-muted">Enter your todo text</small>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-6 offset-2">
                    <button type="submit" class="btn btn-primary">Add Todo</button>
                </div>
            </div>
        </form>
    </div>
@endsection
