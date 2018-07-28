@extends('admin.index')

@section('content')
    <br>
    <h2>Добавить новый адрес</h2>
    <br>
    @include('layouts.errors')

    <form method="post" action="{{route('adm_add_create')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Адрес (255 символов)</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput" placeholder="Введите новый адрес">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить новый адрес</button>
        </div>
    </form>
    <br>
    <h2>Существующие адреса</h2>
    <br>
    <div class="list-group">
        @foreach($addresses as $address)
            <div class="list-group-item">
                {{$address->address}}
            <hr>
                <form action="{{route('adm_add_edit',$address->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <a href="{{route('adm_add_edit',$address->id)}}" class="btn btn-primary">Изменить</a>
                    <input type="submit" class="btn btn-danger" value="Удалить">
                    <a href="{{route('adm_add_list',$address->id)}}" class="btn btn-secondary">Список товаров</a>
                </form>

            </div>
        @endforeach
    </div>
@endsection