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
            <div class="row">
    @foreach($cat->subsections->all() as $sub)

       @if(count($sub->goods->all())>0)

        @foreach($sub->goods->all() as $good)
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
                            </div>
                            <h3><span class="badge badge-secondary">{{$good->price}} р.</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        @endif

    @endforeach
            </div>
        </div>
    </div>
@endsection