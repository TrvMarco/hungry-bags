@extends('layouts.app')

@section('content')
<div class="container backoffice_menu_container p-4">
    <div class="row justify-content-center">
        <div class="col-md-10 d-flex flex-wrap">
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
                        <div class="text-center">
                            <h5 class="card-title"><strong>{{ $user->name }}</strong></h5>
                            <p class="card-text"><strong>Indirizzo:</strong> {{ $user->address}}</p>
                            <p class="card-text"><small><strong>P.iva:</strong> {{ $user->vat }}</small></p>
                            <a href="{{route('admin.users.edit', $user)}}" class="btn btn-primary">Modifica Profilo</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                {{-- CARD MENÙ --}}
                <div class="card w-100 menu_box_home">
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
                            <div class="d-flex justify-content-between pt-3"> 
                                <span class="pt-2"><a class="btn btn-success btn-sm" href="{{route('admin.items.index')}}">Visualizza menu</a></span>
                                <span><a class="btn btn-primary btn-sm" href="{{route('admin.items.create')}}">Inserisci il tuo piatto</a></span>
                            </div>
                    </div>
                </div>            
            </div>
            {{-- SECONDO BLOCCO HOME --}}
            <div class="col-6 pt-4">
                <div class="card w-100">
                    <div class="card-header">{{ __('I tuoi Ordini') }}</div>
                    <div class="card-body">
                        @foreach ($orders as $order)
                            <div class="card-text d-flex item_preview justify-content-between align-items-center">
                                <p>Ordine N: <small>{{$order->id}}</small></p>
                                <p>{{$order->total_price}}&#x20AC;</p>
                            </div>
                        @endforeach
                        <a class="btn btn-success btn-sm" href="{{route('admin.orders.index')}}">Visualizza tutti gli ordini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
