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
        <form action='{{ route('pnj.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>prenom</label>
                <input type='text' name='prenom'>
            </div>
            <div>
                <label for=''>nom</label>
                <input type='text' name='nom'>
            </div>
            <div>
                <label for=''>age</label>
                <input type='text' name='age'>
            </div>
            <div>
                <label for=''>image</label>
                <input type='text' name='image'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
