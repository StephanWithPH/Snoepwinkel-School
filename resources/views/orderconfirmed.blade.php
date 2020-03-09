@extends ('app')

@section('title', "Bestelling aangemaakt : Snoepshop")

@section('body')
<div class="container mt-5 mb-5">
    @include('flash::message')
    <div class="row">
        <div class="col text-center">
            <h3 class="mb-4">{{ __('orderconfirmed.title') }}</h3>
            <p>{{ __('orderconfirmed.newordercreated') }} {{$lastCreatedOrderId}}</p>
            @if($paid == true)
                <p>{{__('orderconfirmed.status')}} <span class="text-success">{{__('orderconfirmed.paidtrue')}}</span></p>
            @else
                <p>{{__('orderconfirmed.status')}} <span class="text-warning">{{__('orderconfirmed.awaitingpayment')}}</span></p>
                <a class="btn btn-info" href="{{ action("PaymentController@preparePayment") }}">{{__('orderconfirmed.gotopayment')}}</a>
            @endif

        </div>

    </div>
    <h4></h4>


</div>

@endsection
