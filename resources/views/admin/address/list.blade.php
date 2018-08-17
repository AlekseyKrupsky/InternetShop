@extends('admin.index')

@section('content')
    <br>
    <h3>Товары привязанные к адресу {{$address->address}}</h3>
    <br>
@if(count($address->goods)>0)
    <div class="list-group">

        @foreach($address->goods as $good)
            <div class="list-group-item">
                {{$good->name}}
                <hr>
            </div>
        @endforeach
    </div>
    @else
    Таких товаров нет
    @endif
@endsection