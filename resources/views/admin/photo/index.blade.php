@extends('admin.index')

@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">

            @if(count($photos)>0)
            <h2>Все фото</h2>
                <a href="{{route('adm_photo_create')}}" class="btn btn-primary">Добавить фото</a>    <br><br>
            <div class="row">

                @foreach($photos as $photo)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">

                            <img title="{{$photo->title}}" class="card-img-top" src="{{asset('images/photos/'.$photo->path)}}" alt="{{$photo->alt}}">
                            <div class="card-body">
                                <p class="card-text">
                                <h4>{{$photo->name}}</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <form action="{{route('adm_photo_edit',$photo->id)}}" method='post'>
                                        <div class="btn-group">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <a href="{{route('adm_photo_edit',$photo->id)}}" class="btn btn-sm btn-outline-secondary">Изменить</a>
                                            <input type="submit" class="btn btn-sm btn-outline-secondary" value="Удалить">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<a href="{{route('adm_good_each',$good->id)}}" class="list-group-item">{{$good->name}}</a>--}}
                @endforeach


            </div>
                @else <h2>Фотографий пока нет</h2>
            <a href="{{route('adm_photo_create')}}" class="btn btn-primary">Добавить фото</a>    <br><br>
            @endif
        </div>
    </div>
@endsection