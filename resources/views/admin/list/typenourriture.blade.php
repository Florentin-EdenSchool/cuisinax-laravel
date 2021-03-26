@extends('layouts.app')

@section('content')
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
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Types Nourriture</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Libelle</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($typeNourriture as $item)
                            <tr>
                                <td>{{ $item->id_type_nourriture }}</td>
                                <td><strong>{{ $item->libelle_type_nourriture }}</strong></td>
                                <td>
                                    <form action="{{ route('plat.destroyTypeNourriture', $item->id_type_nourriture) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer">
            {{ $typeNourriture->links() }}
        </footer>
    </div>
@endsection
