@extends('layouts.app')

@section('content')
<div class="container backoffice_menu_container p-4">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex">
            <div class="col-4">
                {{-- CARD RIEPILOGO DATI RISTORANTE --}}
                <div class="card">
                   
                    <div class="card-body d-flex flex-column align-items-center">
                    @if ($user->image)
                        <img class="card-img-top " src="{{ asset('storage/' . $user->image)}}" alt="Card image cap">
                    @else
                        <a href="{{route('admin.users.edit', $user)}}">
                            <img src="{{asset('images/bugs-150x150.jpg')}}" alt="">
                            <small>clicca per inserire immagine</small>
                        </a>
                       
                    @endif
                    <h5 class="card-title"><strong>{{ $user->name }}</strong></h5>
                    <p class="card-text"><strong>Indirizzo:</strong> {{ $user->address}}</p>
                    <p class="card-text"><small><strong>P.iva:</strong> {{ $user->vat }}</small></p>
                    <a href="{{route('admin.users.edit', $user)}}" class="btn btn-primary">Modifica Profilo</a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                {{-- CARD MENÙ --}}
                <div class="card w-100">
                    <div class="card-header">{{ __('Il tuo Menù') }}</div>
                    <div class="card-body">
                            @foreach ($items as $item)
                                <div class="card-text d-flex item_preview justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        @if ($item->image)
                                            <div class="item_img_preview_box mr-3">
                                                <img class="img-fluid center" src="{{ asset('storage/' . $item->image)}}" alt="">
                                            </div>
                                        @else
                                            <div class="item_img_preview_box mr-3">
                                                <img class="bags-blue" src="{{asset('images/logo-busta-blu-50x50.png')}}" alt="">
                                            </div>
                                        @endif
                                        
                                        <div>{{ $item->name }}</div>
                                    </div>
                                    <div>
                                        {{$item->price}}&#x20AC;
                                    </div>
                                </div>
                            @endforeach
                        <a href="{{route('admin.items.index')}}">visualizza menu</a>
                        <br>
                        <a href="{{route('admin.items.create')}}">inserisci il tuo piatto</a>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection





{{-- <div class="card">
    <div class="card-header">{{ __('Le tipologie del tuo ristorante') }}</div>
    <div class="card-body">
        @if ($types->isEmpty())
                <h2>NON HAI ANCORA INSERITO UNA TIPOLOGIA RISTORANTE!</h2>
                <a href="{{route('admin.users.edit', $user)}}">Scegli la tipologia del tuo ristorante</a>
        @else
            @foreach ($types as $type)
                <li>{{$type->name}}</li>
            @endforeach
                {{--! verificare in seguito per la modifica --}}
                {{-- <a href="{{route('admin.types.index')}}">Modifica le tipologie del tuo ristorante</a> <br> --}}
                {{-- <a href="{{route('admin.users.edit', $user)}}">Aggiungi o modifica la tipologia del tuo ristorante</a> --}}
                
        {{-- @endif
    </div>
</div> --}}