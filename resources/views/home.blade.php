@extends ('app')

@section('title', "Home : Snoepshop")

@section('body')
<div class="container-fluid p-0">
    <div class="image w-100 text-center">
        <img class="w-100" src="{{asset('img/banner.png')}}">
    </div>
</div>
<div class="container mt-5">
    <h3 class="mb-4">Producten</h3>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="card w-100 border-0">
                <img class="card-img-top" src="https://www.sport.be/media/photos/2017/juli/winegums.jpg" alt="Card image cap">
                <div class="card-body my-3 p-0">
                    <h5 class="card-title">Winegums</h5>
                    <h6 class="d-inline">5,60</h6>
                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="image w-100 text-center">
        <img class="w-100" src="{{asset('img/redband-banner.png')}}">
    </div>
</div>

@endsection
