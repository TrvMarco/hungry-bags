@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vista singolo piatto</h1>
        <div class="item-box d-flex flex-column align-items-center  ">

            <div class="item-name">
                <h1>{{$item->name}}</h1>
            </div>
            <div class="item-image" style="width: 300px">
                <img class="img-fluid" src="{{ asset('storage/' . $item->image)}}" alt="Item Image">
            </div>
            <div class="item-description">
                <p> <strong>Descrizione piatto : </strong> {{$item->description}}</p>
            </div>
            <div class="item-price">
                <p><strong>Prezzo:</strong> € {{$item->price}}</p>
            </div>
        </div>
        <a href="{{route('admin.items.index')}}">Torna al menu</a>
        <br>
        <a href="{{route('admin.home')}}">Home</a>
        
    </div>
@endsection