@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    {{ __('You are logged in!') }}

                    {{-- !PROVVISIORIO IMG RISTORANTE DA AGGIUNGERE UPLOAD IN SEGUITO SE NULL --}}
                    @if($user->image)
                        <div>
                            <img class="img-fluid" src="{{ asset('storage/' . $user->image)}}" alt="Restaurant picture">
                        </div>
                    @endif
                </div>
            </div>

            <div class="card">
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
                            <a href="{{route('admin.users.edit', $user)}}">Aggiungi o modifica la tipologia del tuo ristorante</a>
                            <br>
                            <a href="{{route('admin.types.create')}}">Inserisci una nuova tipologia</a>
                            
                    @endif
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('il tuo menù') }}</div>
                <div class="card-body">
                    <a href="{{route('admin.items.index')}}">visualizza menu</a>
                    <br>
                    <a href="{{route('admin.items.create')}}">inserisci il tuo piatto</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
