@extends('layouts.app')

@section('content')
<section class="container backoffice_menu_container p-4 text-dark">
    <h2>Ricevuta n° : <strong>{{$order->id}}</strong></h2>
    {{-- ristorante  --}}
    <div>
        <h3>Dati ristorante</h3>
        {{-- <img class="card-img-top " src="{{ asset('storage/' . $user->image)}}" alt="Card image cap"> --}}
        <p>Ristorante: {{$user->name}}</p>
        <p>indirizzo : {{$user->address}}</p>
    </div>
    
    {{-- dati ricevuta  --}}
    <div >
        <h3>Dati clienti</h3>
    
    <div>Nome: <strong>{{$order->client_name}}</strong></div>
    <div>Cognome:<strong> {{$order->client_surname}}</strong></div>
    <div>Indirizzo:<strong> {{$order->address}}</strong></div>
    <div>Numero cell.:<strong> {{$order->phone}}</strong></div>
    </div>

    {{-- dati item  --}}
    <div>
        {{-- @dd($orderItems) --}}
        <div>Il cliente ha ordinato:</div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">N.</th>
                <th scope="col">Nome del piatto</th>
                <th scope="col">Prezzo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderItems as $id => $orderItem)
                <tr>
                <th scope="row">{{$id + 1}}</th>
                <td>{{$orderItem['name']}}</td>
                <td>{{$orderItem['price']}} €</td>
                </tr>
                @endforeach
                <tr class="grey">
                <th scope="row"></th>
                <td >Prezzo totale:</td>
                <td>{{$order->total_price}} €</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{route('admin.orders.index')}}">Torna alla lista ordini</a>
        <br>
    <a href="{{route('admin.home')}}">Home</a>
    
    
   

</section>


@endsection