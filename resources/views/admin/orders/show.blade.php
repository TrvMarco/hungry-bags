@extends('layouts.app')

@section('content')
<section class="container">

    {{-- ristorante  --}}
    <div>
        {{-- <img class="card-img-top " src="{{ asset('storage/' . $user->image)}}" alt="Card image cap"> --}}
        <p class="text-white">{{$user->name}}</p>
        <p class="text-white">indirizzo : {{$user->address}}</p>
    </div>
    
    {{-- dati ricevuta  --}}
    <div >
    <h3 class="text-white">Ricevuta n° : {{$order->id}}</h3>
    <h3 class="text-white">{{$order->client_name}} {{$order->client_surname}}</h3>
    <h3 class="text-white">{{$order->address}}</h3>
    </div>

    {{-- dati item  --}}
    <div>
        {{-- @dd($orderItems) --}}
        @foreach ($orderItems as $orderItem)
        <p class="text-white"> {{$orderItem['name']}}</p>
        <p class="text-white"> {{$orderItem['price']}}€</p>
        @endforeach
    </div>
    
    {{-- prezzo totale  --}}
    <div>
        <p class="text-white">Prezzo totale:</p>
        <p class="text-white">{{$order->total_price}} €</p>
    </div>

</section>


@endsection