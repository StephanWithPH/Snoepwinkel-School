@extends ('app')

@section('title', "Over ons : Snoepshop")

@section('body')
<div class="container mt-5">
    @include('flash::message')
    <h3 class="mb-4">{{ __('aboutus.title') }}</h3>
    <div class="row">
        <div class="col-12 text-center">
            <p></p>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="image w-100 text-center">
        <img class="w-100" src="{{asset('img/redband-banner.png')}}">
    </div>
</div>

@endsection
