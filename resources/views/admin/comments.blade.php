@extends('admin.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Последние комментарии</h2>
            @foreach($comments as $comment)
                <hr>
                {{$comment->text}} <br>
                <form action="{{route('adm_comment_del',$comment->id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}<br>
                    <input type="submit" value="Удалить" class="btn btn-danger">
                    <a href="{{route('good_show',$comment->good->id)}}" class="btn btn-info">Ссылка на товар</a>
                </form>
                @endforeach
        </div>
    </div>
@endsection