@extends ('app')

@section('title', "Home : Snoepshop")

@section('body')
<div class="container-fluid p-0">
    <div class="image w-100 text-center">
        <img class="w-100" src="{{asset('img/banner.png')}}">
    </div>
</div>
<div class="container mt-5">
    @include('flash::message')
    <h3 class="mb-4">{{ __('home.products') }}</h3>
    <div class="row">
        @forelse($products as $product)
            <div class="col-lg-3 col-6">
                <div class="card w-100 border-0">
                    <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
                    <div class="card-body my-3 p-0">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <h6 class="d-inline">{{ __('general.currency') }}{{$product->price}}</h6>
                        <a href="{{action('CartController@addToCart', $product->id)}}" class="btn btn-sm btn-info"><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center">{{ __('home.noproductsfound') }}</p>
            </div>
        @endforelse

    </div>
</div>

<div class="container-fluid p-0">
    <div class="image w-100 text-center">
        <img class="w-100" src="{{asset('img/redband-banner.png')}}">
    </div>
</div>

@endsection
