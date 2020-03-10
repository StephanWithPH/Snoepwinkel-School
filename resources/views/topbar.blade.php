<div class="container-fluid">
    <div class="row bg-dark">
        <div class="col-12">
            <div class="text-center pb-1 pt-1">
                <h6 class="text-white d-inline mr-3"><i class="fab fa-ideal"></i> {{ __('topbar.safepayment') }}</h6>
                <h6 class="mt-1 mb-1 text-white d-inline mr-3"><i class="fas fa-truck"></i> {{ __('topbar.shippingxdays') }}</h6>
                <h6 class="mt-1 mb-1 text-white d-inline"><i class="fab fa-facebook-f"></i> {{ __('topbar.followsocial') }}</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mt-3 mb-3">
                        <a href="{{action('HomeController@loadHomePage')}}">
                            <img style="width:300px" src={{ asset('img/logo.png') }}>
                        </a>
                    </div>
                </div>
                <div class="col-5">
                    <input class="form-control border-primary" placeholder="{{ __('topbar.searchplaceholder') }}">

                </div>
                <div class="col-1">
                    <a href="{{action('CartController@loadCart')}}">{{ __('topbar.cart') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-info">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{action('HomeController@loadHomePage')}}">{{ __('topbar.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">{{ __('topbar.lollys') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">{{ __('topbar.liquorice') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Zuurstokken</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link">{{ __('topbar.shippinginformation') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ action('AboutUsController@loadAboutUs') }}">{{ __('topbar.aboutus') }}</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>
</div>
