@extends('back.layouts.app')
@section('content')

@if (session()->has('message'))
<div class='flex items-center justify-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded' role='alert'>
    {{ session()->get('message') }}
</div>
@endif
@if ($errors->any())
<div class='alert alert-danger flex'>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="flex flex-col items-center justify-center">
    <h1 class='my-5 text-3xl uppercase'>Joueurs</h1>
    <button class='bg-green-400 p-3 rounded mb-5'><a href='{{ route('joueur.create') }}'>Create</a></button>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class='text-center'>Joueur</th>
                        <th class='text-center'>Nom</th>
                        <th class='text-center'>Prenom</th>
                        <th class='text-center'>Classe</th>
                        <th class='text-center'>Niveau</th>
                        <th class='text-center'>Experience</th>
                        <th class='text-center'>Race</th>
                        <th class='text-center'>Buttons</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($joueurs as $joueur)
                        <tr>
                            <th class='text-center'>{{ $joueur->id }}</th>
                            <td class='text-center'>{{ $joueur->Joueur }}</td>
                            <td class='text-center'>{{ $joueur->Nom }}</td>
                            <td class='text-center'>{{ $joueur->Prenom }}</td>
                            <td class='text-center'>{{ $joueur->Classe }}</td>
                            <td class='text-center'>{{ $joueur->Niveau }}</td>
                            <td class='text-center'>{{ $joueur->Experience }}</td>
                            <td class='text-center'>{{ $joueur->Race }}</td>
                            <td class='text-center'> {{-- all_td_anchor --}}
                                <div class='flex justify-around'>
                                    <form action='{{ route('joueur.destroy', $joueur->id) }}' method='post'>
                                        @csrf
                                        <button class="rounded bg-red-400 p-3" type=submit>Delete</button>
                                    </form>
                                    <button class='rounded bg-yellow-400 p-3'><a href='{{ route('joueur.edit', $joueur->id) }}'>Edit</a></button>
                                    <button class='rounded bg-blue-400 p-3'><a href='{{ route('joueur.read', $joueur->id) }}'>Read</a></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
