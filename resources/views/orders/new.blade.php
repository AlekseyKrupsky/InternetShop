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

            <input class="btn btn-primary" type="submit" value="Заказать">
        </form>
    </div>
@endsection