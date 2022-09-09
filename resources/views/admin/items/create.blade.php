@extends('layouts.app')

@section('content')
    <div class="container backoffice_menu_container p-4">
        <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- NOME PIATTO --}}
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label class="color-white" for="name">Nome: *</label>
                        <input type="text" maxlength="100" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Inserisci il nome del piatto" value="{{old('name')}}" required>
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
                        <label class="color-white" for="description">Descrizione: *</label>
                        <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description" placeholder="Inserisci una descrizione" cols="30" rows="5" name="description" required>{{old('description')}}</textarea>
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
                        <label class="color-white" for="price">Prezzo: *</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">&#x20AC;</span>
                            <input class="form-control input-group-append @error('price') is-invalid @enderror" type="number" min="0.00" max="200" placeholder="Inserisci il prezzo" step="0.01" name="price" value="{{old('price')}}" required/>
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            {{-- IMMAGINE --}}
            <div class="form-group mb-4">
                <label class="color-white" for="image">Immagine:</label>
                <input  type="file" accept=".png,.jpeg,.jpg" class=" color-white form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            {{-- PUBBLICARLO NEL MENÙ --}}
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input @error('is_visible') is-invalid @enderror" id="is_visible" name="is_visible" {{old('is_visible') ? 'checked' : ''}}>
                <label class="form-check-label color-white" for="is_visible">Pubblica il piatto nel menù</label>
                @error('is_visible')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <hr class="white-bg">

            {{-- CAMPI OBBLIGATORI --}}
            <div class="form-group row">
                <div class="col-md-6 text-muted">
                    <small class="color-white">I campi contrassegnati con * sono obbligatori.</small>
                </div>
            </div>

            <button type="submit" class="btn btn-primary beige-btn">Crea piatto</button>
            
        </form>
    </div>
@endsection