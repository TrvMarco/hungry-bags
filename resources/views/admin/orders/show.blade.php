@extends('layouts.app')

@section('content')
<section class="container backoffice_menu_container p-4 text-dark">

    {{-- ristorante  --}}
    <div>
        {{-- <img class="card-img-top " src="{{ asset('storage/' . $user->image)}}" alt="Card image cap"> --}}
        <p>{{$user->name}}</p>
        <p>indirizzo : {{$user->address}}</p>
    </div>
    
    {{-- dati ricevuta  --}}
    <div >
    <h3>Ricevuta n° : {{$order->id}}</h3>
    <h3>{{$order->client_name}} {{$order->client_surname}}</h3>
    <h3>{{$order->address}}</h3>
    </div>

    {{-- dati item  --}}
    <div>
        {{-- @dd($orderItems) --}}
        @foreach ($orderItems as $orderItem)
        <p> {{$orderItem['name']}}</p>
        <p> {{$orderItem['price']}}€</p>
        @endforeach
    </div>
    
    {{-- prezzo totale  --}}
    <div>
        <p><strong>Prezzo totale:</strong></p>
        <p><strong>{{$order->total_price}} €</strong></p>
    </div>

</section>


@endsection