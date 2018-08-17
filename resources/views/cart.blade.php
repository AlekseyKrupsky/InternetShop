@extends('layouts.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
            @if(count($goods)>0)
            <div class="row">


                    @foreach($goods->all() as $good)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="{{asset('images/icons/'.$good->icon)}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                    <h4>{{$good->name}}</h4>
                                    {{$good->short_description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{route('good_show',$good->id)}}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                                            <a href="{{route('cart_del',$good->id)}}" class="btn btn-sm btn-outline-secondary">Удалить</a>
                                        </div>
                                        <h3><span class="badge badge-secondary">{{$good->price}} р.</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


            </div>
            <br>
            <h4>Всего к оплате: {{$goods->sum('price')}} р.</h4>
            @else <h3>Ваша корзина пуста</h3>
            @endif
        </div>
    </div>
@endsection