@extends('admin.index')
@section('content')
    <br>
    <h2>Добавление новой фотографии</h2>
    <br>
    @include('layouts.errors')
    <form method="post" action="{{route('adm_photo')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название (255 символов)</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Альтернативный текст (255 символов)</label>
            <textarea name="alt" class="form-control" id="formGroupExampleInput2"  cols="30" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Титульное название (255 символов)</label>
            <textarea name="title" class="form-control"  cols="30" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput">Изображение</label>
            <input type="file" name="path" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

@endsection