@extends('back.layouts.app')
@section('content')
    <div class='flex flex-col items-center justify-center'>
        <h1 class='my-5'>{{ $joueur->Joueur }}</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Joueur</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Classe</th>
                    <th>Niveau</th>
                    <th>Experience</th>
                    <th>Race</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th class='text-center'>{{ $joueur->id }}</th>
                    <td class='text-center'>{{ $joueur->Joueur }}</td>
                    <td class='text-center'>{{ $joueur->Nom }}</td>
                    <td class='text-center'>{{ $joueur->Prenom }}</td>
                    <td class='text-center'>{{ $joueur->Classe }}</td>
                    <td class='text-center'>{{ $joueur->Niveau }}</td>
                    <td class='text-center'>{{ $joueur->Experience }}</td>
                    <td class='text-center'>{{ $joueur->Race }}</td>
                </tr>
            </tbody>
        </table>
        <button class="rounded bg-slate-400 p-3 mt-5"><a class='btn btn-primary' href='{{ route('joueur.index') }}' role='button'>Back</a></button>
    </div>
@endsection
