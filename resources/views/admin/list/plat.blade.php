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
            <p class="card-header-title">Plats</p>
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
                        @foreach ($plat as $item)
                            <tr>
                                <td>{{ $item->id_plat }}</td>
                                <td><strong>{{ $item->libelle_plat }}</strong></td>
                                <td>
                                    <form action="{{ route('plat.destroyPlat', $item->id_plat) }}" method="post">
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
            {{ $plat->links() }}
        </footer>
    </div>
@endsection
