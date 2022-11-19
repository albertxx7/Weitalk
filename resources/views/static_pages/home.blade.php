@extends('layouts.default')

@section('content')
    <div class="bg-light p-3 p-sm-5 rounded">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是 <a href="">Laravel </a>
        </p>
        <p>
            一切，從現在開始
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">馬上註冊</a>
        </p>
    </div>
@stop
