@extends('back.layouts.app')
@section('content')
    <div class='flex flex-col items-center justify-center'>
        <h1 class='my-5'>Editer : {{ $joueur->Joueur }} </h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('joueur.update' , $joueur->id) }}' method='post'>
            @csrf
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Joueur</label>
                <input class='border shadow p-1'  type='text' name='Joueur' value='{{ $joueur->Joueur }}'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Nom</label>
                <input class='border shadow p-1'  type='text' name='Nom' value='{{ $joueur->Nom }}'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Prenom</label>
                <input class='border shadow p-1'  type='text' name='Prenom' value='{{ $joueur->Prenom }}'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Classe</label>
                <input class='border shadow p-1'  type='text' name='Classe' value='{{ $joueur->Classe }}'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Niveau</label>
                <input class='border shadow p-1'  type='number' name='Niveau' value='{{ $joueur->Niveau }}'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Experience</label>
                <input class='border shadow p-1'  type='number' name='Experience' value='{{ $joueur->Experience }}'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''=>Race</label>
                <input class='border shadow p-1'  type='text' name='Race' value='{{ $joueur->Race }}'>
            </div>
            <button class='w-full rounded bg-slate-400 p-2 mt-5' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
