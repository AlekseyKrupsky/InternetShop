@extends('admin.index')

@section('content')
    <br>
    <div class="list-group">
        @foreach($categorys as $category)
            <a href="{{route('adm_cat_each',$category->id)}}" class="list-group-item">{{$category->name}}</a>
        @endforeach
    </div>
    <br>
    <a href="{{route('adm_cat_create')}}" class="btn btn-primary">Добавить новую категорию</a>
@endsection