@extends ('app')

@section('title', "Product details : Snoepshop")

@section('body')
<div class="container mt-5 mb-5">
    @include('flash::message')
    <div class="row">
        <div class="col-4">
            <img class="w-100" src="{{ $product->image }}"/>
        </div>
        <div class="col-8">
            <h3 class="mb-4">{{ $product->name }}</h3>
            <p>{{ __('productdetails.description') }} {{ $product->description }}</p>
            <p>{{ __('productdetails.productid') }} {{ $product->id }}</p>
            <p>{{ __('productdetails.categories') }}
                @forelse($product->categories as $category)
                    <span class="badge badge-info">{{ $category->name }}</span>
                @empty
                    Geen
                @endforelse
            </p>
            <h5>{{ __('general.currency') }}{{$product->price}}</h5>
            <a class="btn btn-info btn-sm ml-1" href="{{ action('CartController@addToCart', $product->id) }}">{{ __('productdetails.addtocart') }}</a>
        </div>
    </div>
    <hr/>
    <h3 class="mb-4 mt-5">{{ __('productdetails.relatedproducts') }}</h3>
    <div class="row">
    @forelse(\App\Product::inRandomOrder()->where('id', '!=' , $product->id)->take(6)->get() as $product)
            <div class="col-lg-2 col-6">
                <div class="card w-100 border-0">
                    <a href="{{action('ProductController@loadProductDetails', $product->id)}}"><img style="height:150px" class="card-img-top" src="{{$product->image}}" alt="Card image cap"></a>
                    <div class="card-body my-3 p-0">
                        <a href="{{action('ProductController@loadProductDetails', $product->id)}}" class="text-dark"><h5 class="card-title">{{$product->name}}</h5></a>
                        <h6 class="d-inline">{{ __('general.currency') }}{{$product->price}}</h6>
                        <a href="{{action('CartController@addToCart', $product->id)}}" class="btn btn-sm btn-info"><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <div class="text-center">
                    <p>{{ __('productdetails.relatedproductsnotfound') }}</p>
                </div>
            </div>
        @endforelse
    </div>
    <h4></h4>


</div>

@endsection
