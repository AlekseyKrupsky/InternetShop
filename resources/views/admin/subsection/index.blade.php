@extends('admin.index')

@section('content')
    <br>
    @if(count($subs)>0)
    <div class="list-group">
        @foreach($subs as $sub)
            <a href="{{route('adm_sub_each',$sub->id)}}" class="list-group-item">{{$sub->category->name}} / {{$sub->name}}</a>
        @endforeach
    </div>
    <br>
        @else <h2>Нет ни одной подкатегории</h2>
    @endif
    <a href="{{route('adm_sub_create')}}" class="btn btn-primary">Добавить новую подкатегорию</a>
@endsection