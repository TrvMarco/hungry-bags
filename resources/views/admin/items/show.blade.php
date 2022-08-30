@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>vista singolo piatto</h1>
        <div class="item-box d-flex flex-column align-items-center  ">

            <div class="item-name">
                <h1>{{$item->name}}</h1>
            </div>
            <div class="item-image ">
                <img src="https://via.placeholder.com/300.png/09f/fff" alt="">
            </div>
            <div class="item-description">
                <p> <strong>descrizione piatto : </strong> {{$item->description}}</p>
            </div>
            <div class="item-price">
                <p><strong>Prezzo:</strong> € {{$item->price}}</p>
            </div>
        </div>
        <a href="{{route('admin.items.index')}}">torna al menu</a>
        <br>
        <a href="{{route('admin.home')}}">Home</a>
        
    </div>
@endsection