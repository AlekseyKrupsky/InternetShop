@extends('admin.index')
@section('content')
    <br>
    <h2>Подкатегория "{{$sub->name}}"</h2>
    <br>

    @include('layouts.errors')
    <form method="post" action="{{route('adm_sub_each',$sub->id)}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название (255 символов)</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$sub->name}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Описание</label>
            <textarea name="description" class="form-control" id="formGroupExampleInput2"  cols="30" rows="6">{{$sub->description}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </div>
        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
                @foreach($categorys as $category)
                    @if($category->id==$sub->category_id)
                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                    @else <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </form>
    <form method="post" action="{{route('adm_sub_each',$sub->id)}}">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Удалить</button>
        </div>
    </form>

@endsection