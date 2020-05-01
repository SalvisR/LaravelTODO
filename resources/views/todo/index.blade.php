@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 pb-4">
                <h1>All todos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                @foreach ($todos as $todo)
                    <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h5>{{ $todo->title }}</h5>

                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Mark As Done</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $todo->text }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
