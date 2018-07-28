@extends('admin.index')
@section('content')
    <br>
    <h2>Добавление новой категории</h2>
    <br>

 @include('layouts.errors')

    <form method="post" action="{{route('adm_cat')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название (255 символов)</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Велосипеды">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Краткое описание (255 символов)</label>
            <textarea name="description" class="form-control" id="formGroupExampleInput2"  cols="30" rows="6"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

@endsection