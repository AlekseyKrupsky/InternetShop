@extends('admin.index')

@section('content')
    <br>
    <h3>Товары привязанные к адресу</h3>
    <br>

    <div class="list-group">
        {{--@foreach($addresses as $address)--}}
            {{--<div class="list-group-item">--}}
                {{--{{$address->address}}--}}
                {{--<hr>--}}
                {{--<form action="{{route('adm_add_edit',$address->id)}}" method="post">--}}
                    {{--{{csrf_field()}}--}}
                    {{--{{method_field('DELETE')}}--}}
                    {{--<a href="{{route('adm_add_edit',$address->id)}}" class="btn btn-primary">Изменить</a>--}}
                    {{--<input type="submit" class="btn btn-danger" value="Удалить">--}}
                    {{--<a href="{{route('adm_add_list',$address->id)}}" class="btn btn-secondary">Список товаров</a>--}}
                {{--</form>--}}

            {{--</div>--}}
        {{--@endforeach--}}
    </div>
@endsection