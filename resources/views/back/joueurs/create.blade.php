@extends('back.layouts.app')
@section('content')
    <div class='container'>
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
            <div>
                <label for=''>Joueur</label>
                <input type='text' name='Joueur'>
            </div>
            <div>
                <label for=''>Nom</label>
                <input type='text' name='Nom'>
            </div>
            <div>
                <label for=''>Prenom</label>
                <input type='text' name='Prenom'>
            </div>
            <div>
                <label for=''>Classe</label>
                <input type='text' name='Classe'>
            </div>
            <div>
                <label for=''>Niveau</label>
                <input type='text' name='Niveau'>
            </div>
            <div>
                <label for=''>Experience</label>
                <input type='text' name='Experience'>
            </div>
            <div>
                <label for=''>Race</label>
                <input type='text' name='Race'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
