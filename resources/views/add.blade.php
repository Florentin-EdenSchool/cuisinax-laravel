@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panier') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->is_admin == 1)
                        {{ __('Tu es connecté en Administrateur') }}
                    @else
                        {{ __('Tu es connecté en Utilisateur') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection