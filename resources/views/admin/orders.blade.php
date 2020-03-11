@extends ('app')

@section('title', "Over ons : Snoepshop")

@section('body')
    <div class="container mt-5">
        @include('flash::message')
        <h3 class="mb-4">{{ __('aboutus.title') }}</h3>
        <div class="row">
            <div class="col-12">
                <p>Wij zijn Lisa en Rens, oprichters van "De Ouwe Snoeperd".<br/>
                    Een aantal zomers geleden zijn wij gestart met de verkoop van ijs in onze bakfiets. Vele kinderen in de straten van Middelharnis en Dirksland hebben wij verblijd met onze leuke bakfiets en heerlijk ijs. Maar onze bakfiets bleek niet alleen geliefd bij de kinderen, dus kregen we al snel de vraag of wij ook op verzoek kwamen.
                    Wat ooit op een zomerse dag begon als een hobby, bleek een groot succes! En dat is uitgegroeid tot "De Ouwe Snoeperd" die inmiddels al een begrip aan het worden is. De Ouwe Snoeperd is een "catering on wheels" concept en is van alle markten thuis op uw feesten en partijen, braderieën, rommelmarkten, evenementen etc.
                    <br/><br/>
                    Dus heeft "De Ouwe Snoeperd" uw interesse gewekt?.. Neem dan gerust contact met ons op, wij komen graag het ijs/desserts voor u verzorgen! En dat nog altijd voor die hobby prijs.
                    <br/>
                    Bel 06-20305223 of 0629105366
                    <br/>
                    of neem contact op via deze Facebook pagina.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="image w-100 text-center">
            <img class="w-100" src="{{asset('img/redband-banner.png')}}">
        </div>
    </div>

@endsection
