@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Listage') }}</div>

                    <div class="card-body">
                        <div class="form-group row mb-0">
                            <div class="col-md-12" style="text-align: center;">
                                <a href="{{ route('admin.list.origine') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Origines') }}
                                    </button>
                                </a>
                                <a href="{{ route('admin.list.origine') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Ingrédients') }}
                                    </button>
                                </a>
                                <a href="{{ route('admin.list.origine') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Type Nourriture') }}
                                    </button>
                                </a>
                                <a href="{{ route('admin.list.origine') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Type Plat') }}
                                    </button>
                                </a>
                                <a href="{{ route('admin.list.origine') }}">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Plat') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
