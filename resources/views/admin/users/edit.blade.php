@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.users.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <p>Tipologie</p>

            @foreach ($types as $type)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="{{$type->id}}" value="{{$type->id}}" name="types[]" {{in_array($type->id, old('types', $userType)) ? 'checked' : ''}}>
                <label class="form-check-label" for="{{$type->id}}">{{$type->name}}</label>
            </div>
            @endforeach
            @error('types')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crea Tipologia</button>
    </form>
</div>
@endsection