@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row pb-3">
        <div class="col-6 offset-2">
            <h1>Edit Todo</h1>
        </div>
    </div>
        <form action="/todo/{{$todo->id}}" method="post">
            @csrf
            @method("PATCH")
            
            <div class="row">
                <div class="col-6 offset-2">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $todo->title}}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-2">
                    <div class="form-group">
                        <label for="text">Todo text</label>
                        <input type="text" class="form-control @error('text') is-invalid @enderror" id="text" name="text" value="{{old('text') ?? $todo->text}}">
                        @error('text')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <input type="hidden" name="completed" value="{{$todo->completed}}">
            <div class="row">
                <div class="col-6 offset-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
