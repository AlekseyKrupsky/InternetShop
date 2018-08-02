@extends('admin.index')
@section('content')
    <br>
    <h2>Изменить описание товара</h2>
    <br>
    @include('layouts.errors')
    <form method="post" action="{{route('adm_good_edit',$good->id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('patch')}}
        <div class="form-group">
            <label for="formGroupExampleInput">Название</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="" value="{{$good->name}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Краткое описание (255 символов)</label>
            <textarea name="short_description" class="form-control" id="formGroupExampleInput2"  cols="30" rows="3">{{$good->short_description}}</textarea>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Описание</label>
            <textarea name="description" class="form-control"  cols="30" rows="5">{{$good->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleSelect1">Категория</label>
            <select class="form-control" id="exampleSelect1" name="category_id">
                @foreach($categorys as $category)
                    @if($category->id==$good->category_id)
                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                        @else <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Стоимость</label>
            <input type="text" name="price" class="form-control" placeholder="" value="{{$good->price}}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Изображение</label>
            <input type="file" name="icon" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </div>
    </form>

    <h2>Добавить фотографию к товару</h2>

    <form method="post" action="{{route('adm_photo').'/'.$good->id}}" enctype="multipart/form-data">
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

    <h2>Адреса</h2>
    <form action="{{route('adm_add_create',$good->id)}}" method="post">
        {{csrf_field()}}
        <select class="form-control" id="exampleSelect1" name="address_id">
            @foreach($addresses as $address)
                <option value="{{$address->id}}">{{$address->address}}</option>
            @endforeach
        </select>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить новый адрес</button>
        </div>
    </form>
@endsection