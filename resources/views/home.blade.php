@extends('layouts.base')

@section('pageTitle')
    Comics-Home
@endsection

@section('mainContent')
<div class="color">


    <div class="jumboTron">
        <img src="../img/jumbotron.jpg" alt="">
    </div>
    
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