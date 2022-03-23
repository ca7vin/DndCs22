@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Magesorts</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('magesort.update' , $magesort->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>sort</label>
                <input type='text' name='sort' value='{{ $magesort->sort }}'>
            </div>
            <div>
                <label for=''>niveau</label>
                <input type='text' name='niveau' value='{{ $magesort->niveau }}'>
            </div>
            <div>
                <label for=''>ecole</label>
                <input type='text' name='ecole' value='{{ $magesort->ecole }}'>
            </div>
            <div>
                <label for=''>incantation</label>
                <input type='text' name='incantation' value='{{ $magesort->incantation }}'>
            </div>
            <div>
                <label for=''>concentration</label>
                <input type='text' name='concentration' value='{{ $magesort->concentration }}'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description' value='{{ $magesort->description }}'>
            </div>
            <div>
                <label for=''>portee</label>
                <input type='text' name='portee' value='{{ $magesort->portee }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
