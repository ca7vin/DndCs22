@extends('back.layouts.app')
@section('content')
    <div class='flex flex-col items-center justify-center'>
        <h1>Joueurs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
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
                <label class='w-full mr-3' for=''>Joueur</label>
                <input class='border shadow' type='text' name='Joueur'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3' for=''>Nom</label>
                <input class='border shadow' type='text' name='Nom'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3' for=''>Prenom</label>
                <input class='border shadow' type='text' name='Prenom'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3' for=''>Classe</label>
                <input class='border shadow' type='text' name='Classe'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3' for=''>Niveau</label>
                <input class='border shadow' type='text' name='Niveau'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3' for=''>Experience</label>
                <input class='border shadow' type='text' name='Experience'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3' for=''>Race</label>
                <input class='border shadow' type='text' name='Race'>
            </div>
            <button class='w-full rounded bg-slate-400 p-2 mt-5' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
