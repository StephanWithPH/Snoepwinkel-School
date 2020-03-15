@extends ('app')

@section('title', "Mijn Account : Snoepshop")

@section('body')
<div class="container mt-5">
    @include('flash::message')
    <p>Content</p>
    <a href="{{ action('Auth\LoginController@logout') }}">Uitloggen</a>

</div>

@endsection
