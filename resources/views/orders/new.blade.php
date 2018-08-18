@extends('layouts.index')
@section('content')
    <div class="container">
        <h2>Заказа товара</h2>
        Вы собираетесь заказать товар "{{$good->name}}" стоимостью {{$good->price}} р.
        <form action="{{route('new_order',$good->id)}}" method="post">
            {{csrf_field()}}<br>


            <div class="form-group">
                <label for="formGroupExampleInput">Ваш email:</label>
                <input type="email" name="email" value="{{$email}}">
            </div>

            @if(count($good->addresses)>0)
            <div class="form-group">
                <label for="formGroupExampleInput">Выбрать адрес:</label>
                <select class="form-control col-sm-6" name="address_id">
                @foreach($good->addresses as $address)
                        <option value="{{$address->id}}">{{$address->address}}</option>
                @endforeach
                </select>
            </div>
            @else
                <div class="form-group">
                Доступных адресов доставки нет. Мы пришлем его позже по указанному адресу
                </div>
                @endif

            <input class="btn btn-primary" type="submit" value="Заказать">
        </form>
    </div>
@endsection