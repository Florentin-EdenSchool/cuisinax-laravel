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
            <p class="card-header-title">Origines</p>
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
                        @foreach ($origine as $item)
                            <tr>
                                <td>{{ $item->id_origine }}</td>
                                <td><strong>{{ $item->libelle_origine }}</strong></td>
                                <td>
                                    <form action="{{ route('plat.destroyOrigine', $item->id_origine) }}" method="post">
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
            {{ $origine->links() }}
        </footer>
    </div>
@endsection
