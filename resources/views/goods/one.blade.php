<div class="col-md-4">
    <div class="card mb-4 box-shadow">

        <img class="card-img-top" src="{{asset('images/icons/'.$good->icon)}}" alt="Card image cap">
        <div class="card-body">
            <p class="card-text">
            <h4>{{$good->name}}</h4>
            {{$good->short_description}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{route('good_show',$good->id)}}" class="btn btn-sm btn-outline-secondary">Подробнее</a>
                    <a href="{{route('cart_add',$good->id)}}" class="btn btn-sm btn-outline-secondary">В корзину</a>
                </div>
                <h3><span class="badge badge-secondary">{{$good->price}} р.</span></h3>
            </div>
        </div>
    </div>
</div>