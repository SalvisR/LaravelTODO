@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 pb-4 d-flex justify-content-between">
                <h1>All todos</h1>
                <div>
                    <a href="/todo/create" class="btn btn-primary">Add todo</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                @foreach ($todos as $todo)
                    <todo-card :todo="{{$todo}}"></todo-card>
                @endforeach
            </div>
        </div>
    </div>
@endsection
