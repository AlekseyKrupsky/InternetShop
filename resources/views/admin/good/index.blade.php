@extends('admin.index')
@section('content')
    <br>
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Товары магазина</h2>
            <a href="{{route('adm_good_create')}}" class="btn btn-primary">Добавить товар</a>    <br><br>
            <div class="row">
        @foreach($goods as $good)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{asset('images/icons/'.$good->icon)}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <h4>{{$good->name}}</h4>
                            {{$good->short_description}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                                <form action="{{route('adm_good_edit',$good->id)}}" method='post'>
                                    <div class="btn-group">
                                    {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                    <a href="{{route('good_show',$good->id)}}" class="btn btn-sm btn-outline-secondary">Смотреть</a>
                                    <a href="{{route('adm_good_edit',$good->id)}}" class="btn btn-sm btn-outline-secondary">Изменить</a>
                                    <input type="submit" class="btn btn-sm btn-outline-secondary" value="Удалить">
                                    </div>
                                    <h3><span class="badge badge-secondary">{{$good->price}} р.</span></h3>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            {{--<a href="{{route('adm_good_each',$good->id)}}" class="list-group-item">{{$good->name}}</a>--}}
        @endforeach
            </div>
        </div>
    </div>
@endsection