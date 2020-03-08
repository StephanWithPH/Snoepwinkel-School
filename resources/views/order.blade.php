@extends ('app')

@section('title', "Bestellen : Snoepshop")

@section('body')
<div class="container mt-5 mb-5">
    @include('flash::message')
    <h3 class="mb-4">{{ __('order.title') }}</h3>
    <hr/>
    {{ Form::open(array('action' => 'OrderController@createOrder')) }}
    <div class="row">
        <div class="col-4">
            <label for="firstname">{{__('order.firstname')}}</label>
            <input class="form-control" type="text" name="firstname" placeholder="{{__('order.firstnameplaceholder')}}" required>
        </div>
        <div class="col-2">
            <label for="lastnameprefix">{{__('order.lastnameprefix')}}</label>
            <input class="form-control" type="text" name="lastnameprefix" placeholder="{{__('order.lastnameprefixplaceholder')}}">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-6">
            <label for="lastnameprefix">{{__('order.lastname')}}</label>
            <input class="form-control" type="text" name="lastname" placeholder="{{__('order.lastnameplaceholder')}}">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-3">
            <label for="email">{{__('order.email')}}</label>
            <input class="form-control" type="email" name="email" placeholder="{{__('order.emailplaceholder')}}" required>
        </div>
        <div class="col-3">
            <label for="telephone">{{__('order.telephone')}}</label>
            <input class="form-control" type="phone" name="telephone" placeholder="{{__('order.telephoneplaceholder')}}" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-4">
            <label for="streetname">{{__('order.streetname')}}</label>
            <input class="form-control" type="text" name="streetname" placeholder="{{__('order.streetnameplaceholder')}}" required>
        </div>
        <div class="col-2">
            <label for="housenumber">{{__('order.housenumber')}}</label>
            <input class="form-control" type="number" name="housenumber" placeholder="{{__('order.housenumberplaceholder')}}" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-3">
            <label for="postcode">{{__('order.postcode')}}</label>
            <input class="form-control" type="text" name="postcode" placeholder="{{__('order.postcodeplaceholder')}}" required>
        </div>
        <div class="col-3">
            <label for="city">{{__('order.city')}}</label>
            <input class="form-control" type="text" name="city" placeholder="{{__('order.cityplaceholder')}}" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-6 text-right">
            <input class="btn btn-info" value="{{__('order.ordersubmit')}}" type="submit" name="submit" required/>
        </div>
    </div>
    {{ Form::close() }}


</div>

@endsection
