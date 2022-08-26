@extends('layouts.base')

@section('content')
<div class="container">
    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">Aggiungi tipologia</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" >
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           </div>
           <button type="submit" class="btn btn-primary">Crea Tipologia</button>
    </form>
</div>
@endsection