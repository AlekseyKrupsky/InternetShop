@extends('admin.index')
@section('content')
    <br>
    <h2>Изменить описание фото</h2>
    <br>
    @include('layouts.errors')
    <form method="post" action="{{route('adm_photo_edit',$photo->id)}}">
        {{csrf_field()}}
        {{method_field('Patch')}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название (255 символов)</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="" value="{{$photo->name}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Альтернативный текст (255 символов)</label>
            <textarea name="alt" class="form-control" id="formGroupExampleInput2"  cols="30" rows="3">{{$photo->alt}}</textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Титульное название (255 символов)</label>
            <textarea name="title" class="form-control"  cols="30" rows="3">{{$photo->title}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>

@endsection