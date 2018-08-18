@extends('admin.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">

            @if(count($orders)>0)
                <h2>Заказы</h2>
            @foreach($orders as $order)
                <hr>

                    {{--{{$comment->text}} <br>--}}
                <form action="{{route('adm_orders_del',$order->id)}}" method="post">
                    <div class="form-group">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}<br>

                   Заказ для {{$order->email}} <br> <br>
                        <input type="text" name="address" placeholder="Адрес">
                    <input type="submit" value="Заказ выполнен(удалить)" class="btn btn-danger">
                    <a href="{{route('good_show',$order->good->id)}}" class="btn btn-info"> {{$order->good->name}}</a>
                    </div>
                </form>
            @endforeach
                @else
                <h3></h3>
            @endif
        </div>
    </div>
@endsection