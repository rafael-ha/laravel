@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subir imagen') }}</div>

                <div class="card-body">
                    <form method="POST" enctype=multipart/form-data>
                        @csrf
                        <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="image_path" type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path" value="{{ Auth::user()->image_path }}">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>
                            <div class="col-md-6">
                                <textarea name="description" cols="40" rows="3"></textarea>
                            </div>
                        </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar cambios.') }}
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