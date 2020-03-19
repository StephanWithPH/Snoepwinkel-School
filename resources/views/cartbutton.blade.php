<a href="{{action('CartController@loadCart')}}" class="position-fixed btn-lg btn btn-info text-white" style="top: 60px; right: 30px"><i class="fas fa-shopping-cart"></i></a>
@if(\Illuminate\Support\Facades\Auth::user())
    <a href="{{ action('Auth\LoginController@logout') }}" class="position-fixed btn-lg btn btn-danger text-white" style="top: 60px; right: 90px"><i class="fas fa-sign-out-alt"></i></a>
@endif
