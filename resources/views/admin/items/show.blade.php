@extends('layouts.app')

@section('content')
    <div class="container backoffice_menu_container p-4 bg-white border-radius-20px">
        <div class="item-box d-flex flex-column align-items-center">
            <div class="item-name pb-3">
                <h1>{{$item->name}}</h1>
            </div>
            <div class="item-image" style="width: 300px">
                @if ($item->image)
                <img class="img-fluid" src="{{ asset('storage/' . $item->image)}}" alt="Item Image">
                    
                @else
                <a href="{{route('admin.items.edit', $item->id)}}">
                    <img src="{{asset('images/bugs-300x300.jpg')}}" alt=""> 
                    <small>clicca per aggiungere immagine</small>
                </a>
                @endif
            </div>
            <div class="item-description p-3">
                <p> <strong>Descrizione piatto : </strong> {{$item->description}}</p>
            </div>
            <div class="item-price">
                <p><strong>Prezzo:</strong> {{$item->price}}€</p>
            </div>
        </div>
        <a href="{{route('admin.items.index')}}">Torna al menu</a>
        <br>
        <a href="{{route('admin.home')}}">Home</a>
        
    </div>
@endsection