@extends('layouts.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>{{$sub->name}}</h2>
            <div class="row">
                    @if(count($goods)>0)

                        @foreach($goods->all() as $good)
                        @include('goods.one')
                        @endforeach

                        @else <h3>В этом разделе товаров нет</h3>
                    @endif
            </div>
        </div>
    </div>
@endsection