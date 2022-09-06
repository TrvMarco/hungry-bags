@extends('layouts.app')

@section('content')
<div class="container backoffice_menu_container p-4">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex">
            <div class="col-4">
                {{-- CARD RIEPILOGO DATI RISTORANTE --}}
                <div class="card beige-bg border-radius-20px ">
                   
                    <div class="card-body d-flex flex-column align-items-center">
                    @if ($user->image)
                        <img class="card-img-top " src="{{ asset('storage/' . $user->image)}}" alt="Card image cap">
                    @else
                    <img class="img-card" src="{{asset('images/bugs-150x150.jpg')}}" alt="">
                        <a class="btn btn-primary inserisci-img-btn" href="{{route('admin.users.edit', $user)}}">
                            <small>Clicca QUI per inserire un'immagine</small>
                        </a>
                       
                    @endif
                    <h5 class="card-title"><strong>{{ $user->name }}</strong></h5>
                    <p class="card-text"><strong>Indirizzo:</strong> {{ $user->address}}</p>
                    <p class="card-text"><small><strong>P.iva:</strong> {{ $user->vat }}</small></p>
                    <a href="{{route('admin.users.edit', $user)}}" class="btn btn-primary black-btn border-radius-20px ">Modifica Profilo</a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                {{-- CARD MENÙ --}}
                <div class="card w-100 border-radius-20px  beige-bg">
                    <div class="card-header border-radius-20px">{{ __('Il tuo Menù') }}</div>
                    <div class="card-body black-bg border-radius-bottom-20px color-white">
                            @foreach ($items as $item)
                                <div class="card-text d-flex item_preview justify-content-between align-items-center">
                                    <div class="d-flex align-items-center margin-food-list">
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
                        <a class="btn btn-primary visualizza-menu-btn" href="{{route('admin.items.index')}}">Visualizza menu</a>
                        <br>
                        <a class="btn btn-primary inserisci-piatto-btn" href="{{route('admin.items.create')}}">Inserisci il tuo piatto</a>
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