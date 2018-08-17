@extends('layouts.index')
@section('content')
    <div class="container">
    <h2>{{$good->name}} <span class="badge badge-secondary">{{$good->price}} р.</span></h2>
        <img src="{{asset('images/icons/'.$good->icon)}}" alt="" height="150">
        <h4>Описание</h4>
        {{$good->description}}
        <h4>Фотографии</h4>
        @foreach($good->photos as $photo)
            <img title="{{$photo->title}}" src="{{asset('images/photos/'.$photo->path)}}" alt="{{$photo->alt}}" height="100">
            @endforeach
        @if(count($good->addresses)==0) Фотографий нет @endif
        <h4>Адреса доставки</h4>
        @foreach($good->addresses as $address)
            {{$address->address}}
        @endforeach
        @if(count($good->addresses)==0) Адресов нет @endif
        <hr>
        <a href="{{route('new_order',$good->id)}}" class="btn btn-primary">Оформить заказ</a>

        <h4>Комментарии</h4>
        <form action="{{route('good_show',$good->id)}}" method='post'>
                {{csrf_field()}}
            <input type="text" name="comment" class="form-control"><br>
                <input type="submit" class="btn btn-sm btn-outline-secondary" value="Оставить комментарий">
        </form>
        @foreach($good->comments as $comment)
            <hr>
            {{$comment->text}}
            @endforeach
    </div>
    </div>
@endsection