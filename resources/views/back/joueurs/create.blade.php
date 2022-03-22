@extends('back.layouts.app')
@section('content')
    <div class='flex flex-col items-center justify-center'>
        <h1 class='my-5'>Nouveau joueur :</h1>
        @if ($errors->any())
        <div class='flex items-center justify-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5' role='alert'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('joueur.store') }}' method='post'>
            @csrf
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Joueur</label>
                <input class='border shadow p-1' type='text' name='Joueur'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Nom</label>
                <input class='border shadow p-1' type='text' name='Nom'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Prenom</label>
                <input class='border shadow p-1' type='text' name='Prenom'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Classe</label>
                <input class='border shadow p-1' type='text' name='Classe'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Niveau</label>
                <input class='border shadow p-1' type='number' name='Niveau'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Experience</label>
                <input class='border shadow p-1' type='number' name='Experience'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>Race</label>
                <input class='border shadow p-1' type='text' name='Race'>
            </div>
            <button class='w-full rounded bg-slate-400 p-2 mt-5' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
