@extends('layouts.index')

@section('content')
    <div class="container">
    @if(count($goods)>0)
        <h4>Результаты по запросу: {{$search}}</h4>
        @foreach($goods as $good)
                <a href="{{route('good_show',$good->id)}}">
            <div class="result">
        <img src="{{asset('images/icons/'.$good->icon)}}" alt="" width="100">
                <div>
        <h4>{{$good->name}}</h4>
        {{$good->description}}
                </div>
            </div>
                </a>
            @endforeach
    @else
        <h3 align="center">Ничего не найдено</h3>
    @endif

    </div>
@endsection