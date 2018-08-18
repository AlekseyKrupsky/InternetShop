@extends('admin.index')
@section('content')
    <br>
    <h2>Добавление нового товара</h2>
    <br>
    @include('layouts.errors')
    <form method="post" action="{{route('adm_good')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Краткое описание (255 символов)</label>
            <textarea name="short_description" class="form-control" id="formGroupExampleInput2"  cols="30" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Описание</label>
            <textarea name="description" class="form-control"  cols="30" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
            @foreach($categorys as $category)
                    <option value="{{$category->id}}">  {{$category->getParent()}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Стоимость</label>
            <input type="text" name="price" class="form-control" placeholder="">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Изображение</label>
            <input type="file" name="icon" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection