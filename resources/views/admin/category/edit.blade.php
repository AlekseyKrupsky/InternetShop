@extends('admin.index')
@section('content')
    <br>
    <h2>Категория "{{$category->name}}"</h2>
    <br>

    @include('layouts.errors')
    <form method="post" action="{{route('adm_cat_each',$category->id)}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название (255 символов)</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$category->name}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Краткое описание (255 символов)</label>
            <textarea name="description" class="form-control" id="formGroupExampleInput2"  cols="30" rows="6">{{$category->description}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </div>
    </form>
    <form method="post" action="{{route('adm_cat_each',$category->id)}}">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Удалить</button>
        </div>
    </form>

@endsection