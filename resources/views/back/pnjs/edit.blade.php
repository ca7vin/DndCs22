@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Pnjs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('pnj.update' , $pnj->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>prenom</label>
                <input type='text' name='prenom' value='{{ $pnj->prenom }}'>
            </div>
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom' value='{{ $pnj->nom }}'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age' value='{{ $pnj->age }}'>
            </div>
            <div>
                <label for=''>image</label>
                <input type='text' name='image' value='{{ $pnj->image }}'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description' value='{{ $pnj->description }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
