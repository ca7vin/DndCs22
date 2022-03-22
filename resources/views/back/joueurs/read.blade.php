@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Joueurs</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>Joueur</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Prenom</th>
                    <th scope='col'>Classe</th>
                    <th scope='col'>Niveau</th>
                    <th scope='col'>Experience</th>
                    <th scope='col'>Race</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $joueur->id }}</th>
                    <td>{{ $joueur->Joueur }}</td>
                    <td>{{ $joueur->Nom }}</td>
                    <td>{{ $joueur->Prenom }}</td>
                    <td>{{ $joueur->Classe }}</td>
                    <td>{{ $joueur->Niveau }}</td>
                    <td>{{ $joueur->Experience }}</td>
                    <td>{{ $joueur->Race }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('joueur.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
