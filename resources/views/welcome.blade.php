@extends('layouts.index')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Добро пожаловать!</h1>
            <p>В нашем интернет магазине вы найдете любое средство передвижения по приятной цене</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('about')}}" role="button">Наши контакты</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            @foreach($categorys as $category)
                <div class="col-md-4">
                    <h2>{{$category->name}}</h2>
                    <p>{{$category->description}}</p>
                    <p><a class="btn btn-secondary" href="{{route('category',$category->id)}}" role="button">Перейти</a></p>
                </div>
                @endforeach
        </div>

        <hr>

    </div> <!-- /container -->
    @endsection