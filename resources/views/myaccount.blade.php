@extends ('app')

@section('title', "Mijn Account : Snoepshop")

@section('body')
<div class="container mt-5">
    @include('flash::message')
    <h3 class="mb-4">{{ $user->name }}</h3>
    @forelse($user->orders as $order)
        <p>U hebt al een keer besteld bij deze webshop.</p>
    @empty
        <p>U hebt nog niet besteld bij deze webshop!</p>
    @endforelse
    <hr/>
    @if($user->is_admin)
        <p>U bent een admin</p>
    @else
        <p>U bent een normale gebruiker</p>
    @endif

</div>

@endsection
