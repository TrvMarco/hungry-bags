@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- NOME PIATTO --}}
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" maxlength="100" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Inserisci il nome del piatto" value="{{old('name')}}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- DESCRIZIONE --}}
            <div class="form-group">
                <label for="description">Descizione:</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description" placeholder="Inserisci una descrizione" cols="30" rows="5" name="description" required>{{old('description')}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- PREZZO --}}
            <div class="form-group">
                <label for="price">Prezzo: (€)</label>
                <input class="form-control  @error('price') is-invalid @enderror" type="number" min="0.01" max="200" placeholder="Inserisci il prezzo" step="any" name="price" required/>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- IMMAGINE --}}
            <div class="form-group">
                <label for="image">Immagine:</label>
                <input type="file" accept=".png,.jpeg,.jpg" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- PUBBLICARLO NEL MENÙ --}}
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" {{old('is_visible') ? 'checked' : ''}}>
                <label class="form-check-label" for="is_visible">Pubblica il piatto nel menù</label>
                @error('is_visible')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crea piatto</button>
            
        </form>
    </div>
@endsection