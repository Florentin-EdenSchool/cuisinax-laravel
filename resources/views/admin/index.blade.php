@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if (session()->has('danger'))
                <div class="alert alert-danger" role="alert">
                    {{ session('danger') }}
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Administration') }}</div>
                    <h2 class="title">Listage</h2>
                    <div class="col-md-12" style="text-align: center;">
                        <a href="{{ route('admin.list.origine') }}">
                            <button class="btn btn-success">
                                {{ __('Origines') }}
                            </button>
                        </a>
                        <a href="{{ route('admin.list.ingredient') }}">
                            <button class="btn btn-success">
                                {{ __('Ingrédients') }}
                            </button>
                        </a>
                        <a href="{{ route('admin.list.typenourriture') }}">
                            <button class="btn btn-success">
                                {{ __('Type Nourriture') }}
                            </button>
                        </a>
                        <a href="{{ route('admin.list.typeplat') }}">
                            <button class="btn btn-success">
                                {{ __('Type Plat') }}
                            </button>
                        </a>
                        <a href="{{ route('admin.list.plat') }}">
                            <button class="btn btn-success">
                                {{ __('Plat') }}
                            </button>
                        </a>
                    </div>
                    <div class="title-line"></div>

                    <div class="card-body">
                        <form action="{{ route('plat.storeOrigine') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="libelle_origine"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Origine') }}</label>

                                <div class="col-md-6">
                                    <input id="libelle_origine" type="text"
                                        class="form-control @error('libelle_origine') is-invalid @enderror"
                                        name="libelle_origine" required autocomplete="current-libelle_origine">

                                    @error('libelle_origine')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form action="{{ route('plat.storePlatIngredient') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="libelle_ingredient"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Ingrédient') }}</label>

                                <div class="col-md-6">
                                    <input id="libelle_ingredient" type="text"
                                        class="form-control @error('libelle_ingredient') is-invalid @enderror"
                                        name="libelle_ingredient" required autocomplete="current-libelle_ingredient">

                                    @error('libelle_ingredient')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form action="{{ route('plat.storeTypePlat') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="libelle_type_plat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Type Plat') }}</label>

                                <div class="col-md-6">
                                    <input id="libelle_type_plat" type="text"
                                        class="form-control @error('libelle_type_plat') is-invalid @enderror"
                                        name="libelle_type_plat" required autocomplete="current-libelle_type_plat">

                                    @error('libelle_type_plat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form action="{{ route('plat.storeTypeNourriture') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="libelle_type_nourriture"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Type Nourriture') }}</label>

                                <div class="col-md-6">
                                    <input id="libelle_type_nourriture" type="text"
                                        class="form-control @error('libelle_type_nourriture') is-invalid @enderror"
                                        name="libelle_type_nourriture" required
                                        autocomplete="current-libelle_type_nourriture">

                                    @error('libelle_type_nourriture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form action="{{ route('plat.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="libelle_plat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Plat') }}</label>

                                <div class="col-md-6">
                                    <input id="libelle_plat" type="text"
                                        class="form-control @error('libelle_plat') is-invalid @enderror" name="libelle_plat"
                                        required autocomplete="current-libelle_plat">

                                    @error('libelle_plat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="poids"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Poids') }}</label>

                                <div class="col-md-6">
                                    <input id="poids" type="text" class="form-control @error('poids') is-invalid @enderror"
                                        name="poids" required autocomplete="current-poids">

                                    @error('poids')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control @error('prix') is-invalid @enderror"
                                        name="prix" required autocomplete="current-prix">

                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="id_origine"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Origine') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="id_origine">
                                        @foreach ($origine as $origine)
                                            <option value="{{ $origine->id_origine }}">{{ $origine->libelle_origine }}
                                            </option>;
                                        @endforeach
                                    </select>

                                    @error('id_origine')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="id_type_nourriture"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Type Nourriture') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="id_type_nourriture">
                                        @foreach ($typeNourriture as $typeNourriture)
                                            <option value="{{ $typeNourriture->id_type_nourriture }}">
                                                {{ $typeNourriture->libelle_type_nourriture }}</option>;
                                        @endforeach
                                    </select>

                                    @error('id_type_nourriture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="id_type_plat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Type plat') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="id_type_plat">
                                        @foreach ($typePlat as $typePlat)
                                            <option value="{{ $typePlat->id_type_plat }}">
                                                {{ $typePlat->libelle_type_plat }}</option>;
                                        @endforeach
                                    </select>

                                    @error('id_type_plat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <p></p>
                        <form action="{{ route('plat.storePlatIngredient') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="id_ingredient"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Ingrédient') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="id_ingredient">
                                        @foreach ($ingredient as $ingredient)
                                            <option value="{{ $ingredient->id_ingredient }}">
                                                {{ $ingredient->libelle_ingredient }}</option>;
                                        @endforeach
                                    </select>

                                    @error('id_ingredient')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <p></p>
                            <div class="form-group row">
                                <label for="id_plat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Plat') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="id_plat">
                                        @foreach ($plat as $plat)
                                            <option value="{{ $plat->id_plat }}">{{ $plat->libelle_plat }}</option>;
                                        @endforeach
                                    </select>

                                    @error('id_plat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ajouter') }}
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
