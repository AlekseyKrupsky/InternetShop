@extends('admin.index')

@section('content')
    <br>
    <h2>Текст страницы "О нас"</h2>
    <br>
    @include('layouts.errors')

    <form action="{{route('adm_about')}}" method="post">
        {{csrf_field()}}
        <textarea class="form-control" name="about" id="" cols="30" rows="10">{{$text->value}}</textarea><br>
        <input type="submit" class="btn btn-primary" value="Изменить">
    </form>

@endsection