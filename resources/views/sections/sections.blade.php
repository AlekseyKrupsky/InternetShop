@extends('layouts.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
    @if(count($children)>0)
                <h2>{{$cat->name}}</h2>
        <div class="list-group">
            @foreach($children as $child)
                <a href="{{route('category',$child->id)}}" class="list-group-item">{{$child->name}}</a>
            @endforeach
        </div>
        <br>
    @else <h2>Нет ни одной подкатегории</h2>
    @endif
        @if(count($cat->goods->all())>0)
        <h2>Товары</h2>
            @else
            <h2>Нет ни одного товара</h2>
        @endif
            <div class="row">

       @if(count($cat->goods->all())>0)
        @foreach($cat->goods->all() as $good)
            @include('goods.one')
            @endforeach
        @endif

            </div>
        </div>
    </div>
@endsection