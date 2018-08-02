@extends('admin.index')
@section('content')
    <br>
    <h2>Добавление новой подкатегории</h2>
    <br>

    @include('layouts.errors')

    <form method="post" action="{{route('adm_sub')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название (255 символов)</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Запчасти">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Описание</label>
            <textarea name="description" class="form-control" id="formGroupExampleInput2"  cols="30" rows="6"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
                @foreach($categorys as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>

@endsection
