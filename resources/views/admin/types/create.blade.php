@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <p>Tipologie</p>
        <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}" >
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>
@endsection