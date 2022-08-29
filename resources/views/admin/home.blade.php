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
                </div>
            </div>
            <div class="card">
                <div class="card-header">{{ __('Inserisci la tipologia del tuo ristorante') }}</div>
                <div class="card-body">
                    <ul>
                        <li><a href="{{route('admin.types.create')}}">Scegli la tipologia del tuo ristorante</a></li>
                        <li><a href="{{route('admin.types.index')}}">Modifica la tipologia del tuo ristorante</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
