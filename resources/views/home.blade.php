@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card">
                    <img src="" alt="">
                    <p>
                        {{$comic['title']}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection