@extends ('app')

@section('title', "Winkelmandje : Snoepshop")

@section('body')
<div class="container mt-5">
    @include('flash::message')
    <h3 class="mb-4">{{ __('cart.title') }}</h3>
    <hr/>
    @forelse($cartProducts as $cartProduct)
        <div class="row align-items-center mt-4" style="height:100px">
            <div class="col-2 align-items-center">
                <img src="{{$cartProduct['product']->image}}" width="100px" height="100px"/>
            </div>
            <div class="col-4 align-items-center">
                <p class="ml-3">{{$cartProduct['product']->name}}</p>
            </div>
            <div class="col-1 align-items-center">
                <input style="margin-top: -15px" type="number" class="form-control form-control-sm" id="{{'quantity' . $cartProduct['product']->id}}" aria-describedby="quantityBox" placeholder="Quantity" value="{{$cartProduct['amount']}}">
            </div>
            <div class="col-1 align-items-center">
                <p>{{$cartProduct['amount']}} x {{ __('general.currency') }}{{$cartProduct['product']->price}}</p>
            </div>
            <div class="col-4 align-items-center">
                <p class="text-right"><a class="text-danger" href="{{action('CartController@removeFromCart', $cartProduct['product']->id)}}"><i class="fas fa-times"></i></a></p>
            </div>
        </div>
        <hr/>
    @empty
        <div class="row">
            <div class="col-12">
                <p class="text-center">{{ __('cart.empty') }}</p>
            </div>
        </div>
    @endforelse
    <div class="row align-items-center mt-4" style="height:100px">
        <div class="col-2 align-items-center">
{{--            <img src="{{$cartProduct['product']->image}}" width="100px" height="100px"/>--}}
        </div>
        <div class="col-4 align-items-center">
{{--            <p class="ml-3">{{$cartProduct['product']->name}}</p>--}}
        </div>
        <div class="col-1 align-items-center">
{{--            <input style="margin-top: -15px" type="number" class="form-control form-control-sm" id="{{'quantity' . $cartProduct['product']->id}}" aria-describedby="quantityBox" placeholder="Quantity" value="{{$cartProduct['amount']}}">--}}
        </div>
        <div class="col-1 align-items-center">
{{--            <p>{{$cartProduct['amount']}} x {{ __('general.currency') }}{{$cartProduct['product']->price}}</p>--}}
        </div>
        <div class="col-4 align-items-center">
            <p class="text-right"><a class="btn btn-info text-white" href="{{action('OrderController@loadOrder')}}">{{__('cart.order')}}</a></p>
        </div>
    </div>

</div>

<div class="container-fluid p-0">
    <div class="image w-100 text-center">
        <img class="w-100" src="{{asset('img/redband-banner.png')}}">
    </div>
</div>

@endsection
