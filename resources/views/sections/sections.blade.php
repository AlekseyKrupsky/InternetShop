@extends('layouts.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
    <h2>Подразделы</h2>
    @if(count($cat->subsections->all())>0)
        <div class="list-group">
            @foreach($cat->subsections->all() as $sub)
                <a href="{{route('section_show',$sub->id)}}" class="list-group-item">{{$sub->name}}</a>
            @endforeach
        </div>
        <br>
    @else <h2>Нет ни одной подкатегории</h2>
    @endif
            <h2>Все товары</h2>
            <div class="row">
    @foreach($cat->subsections->all() as $sub)

       @if(count($sub->goods->all())>0)

        @foreach($sub->goods->all() as $good)
            @include('goods.one')
            @endforeach
        @endif
    @endforeach
            </div>
        </div>
    </div>
@endsection