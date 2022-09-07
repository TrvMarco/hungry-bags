@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-radius-20px  beige-bg">
                <div class="card-header border-radius-20px ">{{ __('Modifica') }}</div>

                <div class="card-body white-bg border-radius-bottom-20px ">
                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- NOME --}}
                        {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Attività*') }}</label>
                            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- VAT --}}
                        {{-- <div class="form-group row">
                            <label for="vat" class="col-md-4 col-form-label text-md-right">{{ __('P.iva*') }}</label>
                            
                            <div class="col-md-6">
                                <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat', $user->vat) }}" required autocomplete="vat" autofocus>
                                @error('vat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- ADDRESS --}}
                        {{-- <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo*') }}</label>
                            

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', $user->address) }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <hr> --}}

                        {{-- IMMAGINE --}} 
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Immagine') }}</label>
                            @if ($user->image)
                                <div>
                                    <img class="img-thumbnail" src="{{asset("storage/{$user->image}")}}" alt="immagine">
                                </div>
                            @endif
                            <div class="col-md-6">
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr>

                        {{-- TIPOLOGIES --}}
                        
                        <div class="form-group row">
                            <label for="types" class="col-md-4 col-form-label text-md-right">{{ __('Tipologie') }}</label>
                            <div class="col-md-6">
                                @foreach ($types as $type)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{$type->id}}" value="{{$type->id}}" name="types[]" {{in_array($type->id, old('types', $userType)) ? 'checked' : ''}}>
                                    <label class="form-check-label" for="{{$type->id}}">{{$type->name}}</label>
                                </div>
                                @endforeach
                                @error('types')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- REGISTER BUTTON --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary black-btn">
                                    {{ __('Modifica') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
