@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Rechercher') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            <div class="form-group row">
                                <label for="ingredient"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Ingrédient') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="ingredient" required>
                                        @foreach ($ingredient as $ingredient)
                                            <option value="{{ $ingredient->id_ingredient }}">{{ $ingredient->libelle_ingredient }}</option>;
                                        @endforeach
                                    </select>

                                    @error('ingredient')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Rechercher') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form method="POST" action="{{ route('login') }}">
                            <div class="form-group row">
                                <label for="word"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Contenant') }}</label>

                                <div class="col-md-6">
                                    <input id="word" type="text" class="form-control @error('word') is-invalid @enderror"
                                        name="word" required autocomplete="current-word">

                                    @error('word')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Rechercher') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form method="POST" action="{{ route('login') }}">
                            <div class="form-group row">
                                <label for="origine"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Prix maximum') }}</label>

                                <div class="col-md-6">
                                    <input id="max" type="text" class="form-control @error('max') is-invalid @enderror"
                                        name="max" required autocomplete="current-max">

                                    @error('max')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="origine"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Prix minimum') }}</label>
                                <div class="col-md-6">
                                    <input id="min" type="text" class="form-control @error('min') is-invalid @enderror"
                                        name="min" required autocomplete="current-min">

                                    @error('min')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="origine"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Origine') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="ingredient" required>
                                        @foreach ($origine as $origine)
                                            <option value="{{ $origine->id_origine }}">{{ $origine->libelle_origine }}</option>;
                                        @endforeach
                                    </select>

                                    @error('origine')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Rechercher') }}
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
