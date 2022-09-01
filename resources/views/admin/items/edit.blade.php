@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('admin.items.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        {{-- NOME PIATTO --}}
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="name">Nome: *</label>
                    <input id="name" type="text" maxlength="100" class="form-control @error('name') is-invalid @enderror"  name="name" placeholder="Inserisci il nome del piatto" value="{{old('name', $item->name)}}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- DESCRIZIONE --}}
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <label for="description">Descizione: *</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description" placeholder="Inserisci una descrizione" cols="30" rows="5" name="description" required autocomplete="description" autofocus>{{old('description', $item->description)}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- PREZZO --}}
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="price">Prezzo: *</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text">&#x20AC;</span>
                        <input class="form-control input-group-append @error('price') is-invalid @enderror" type="number" min="0.00" max="200" placeholder="Inserisci il prezzo" step="0.1" name="price" value="{{old('price', $item->price)}}" required autocomplete="price" autofocus/>
                    </div>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- IMMAGINE --}}
        <div class="form-group mb-4">
            <label for="image">Immagine:</label>
            @if ($item->image)
            <div>
                <img src="{{asset("storage/{$item->image}")}}" alt="immagine">
            </div>
        @endif
            <input type="file" accept=".png,.jpeg,.jpg" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        {{-- PUBBLICARLO NEL MENÙ --}}
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" {{old('is_visible', $item->is_visible) ? 'checked' : ''}}>
            <label class="form-check-label" for="is_visible">Pubblica il piatto nel menù</label>
            @error('is_visible')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <hr>

        <div class="mb-3"><small>I campi contrassegnati con * sono obbligatori</small></div>

        <button type="submit" class="btn btn-warning">Modifica piatto</button>
        
    </form>
</div>
@endsection