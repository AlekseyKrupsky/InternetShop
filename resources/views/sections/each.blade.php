@extends('layouts.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>{{$sub->name}}</h2>
            <div class="row">
                    @if(count($goods)>0)

                        @foreach($goods->all() as $good)
                            <div class="col-md-4">
                                @include('goods.one')
                            </div>
                        @endforeach

                        @else <h3>В этом разделе товаров нет</h3>
                    @endif
            </div>
        </div>
    </div>
@endsection