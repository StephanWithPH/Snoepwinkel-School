@extends ('app')

@section('title', "Mijn Account : Snoepshop")

@section('body')
<div class="container mt-5">
    @include('flash::message')
    <h3 class="mb-5">{{ $user->name }}</h3>

    @forelse($user->orders as $order)
        <h5 class="mb-4">Bestelling {{ $order->id }}</h5>
        @forelse($order->products as $product)
            <hr/>
            <div class="row align-items-center mt-4" style="height:100px">
                <div class="col-2 align-items-center">
                    <img src="{{$product->image}}" width="100px" height="100px"/>
                </div>
                <div class="col-4 align-items-center">
                    <p class="ml-3">{{$product->name}}</p>
                </div>
                <div class="col-5 align-items-center">
                    <p>{{ __('general.currency') }}{{number_format($product->price, 2)}}</p>
                </div>
                <div class="col-1 align-items-center">
                    <p class="text-right">
                        @if($product->paid)
                            <i class="far fa-smile text-success"></i>
                        @else
                            <i class="far fa-smile text-danger"></i>
                        @endif
                    </p>
                </div>
            </div>
        @empty
            <hr/>
            <p>Er is een fout opgetreden bij het ophalen van de producten bij order met nummer {{ $order->id }}</p>
        @endforelse
        <hr/>
    @empty
        <p>U hebt nog niet besteld bij deze webshop!</p>
    @endforelse

    @if($user->is_admin)
        <p>U bent een admin</p>
    @else
        <p>U bent een normale gebruiker</p>
    @endif

</div>

@endsection
