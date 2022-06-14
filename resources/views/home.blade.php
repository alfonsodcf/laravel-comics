@extends('layouts.base')

@section('pageTitle')
    Comics-Home
@endsection

@section('mainContent')
<div class="color">


    <h1>Home</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h2>{{$comic['title']}}</h2>
            </div>
                
            @endforeach
        </div>

    </div>

</div>
@endsection