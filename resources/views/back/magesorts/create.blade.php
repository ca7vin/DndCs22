@extends('back.layouts.app')
@section('content')
<div class='flex flex-col items-center justify-center'>
    <h1 class='my-5'>Nouveau sort :</h1>
    @if ($errors->any())
        <div class='flex items-center justify-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5' role='alert'>
            <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('magesort.store') }}' method='post'>
            @csrf
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>sort</label>
                <input class='border shadow p-1' type='text' name='sort'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>niveau</label>
                <input class='border shadow p-1' type='text' name='niveau'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>ecole</label>
                <input class='border shadow p-1' type='text' name='ecole'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>incantation</label>
                <input class='border shadow p-1' type='text' name='incantation'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>concentration</label>
                <input class='border shadow p-1' type='text' name='concentration'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>description</label>
                <input class='border shadow p-1' type='text' name='description'>
            </div>
            <div class='columns-2 flex justify-around mb-2'>
                <label class='w-full mr-3 p-1' for=''>portee</label>
                <input class='border shadow p-1' type='text' name='portee'>
            </div>
            <button class='w-full rounded bg-slate-400 p-2 mt-5' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
