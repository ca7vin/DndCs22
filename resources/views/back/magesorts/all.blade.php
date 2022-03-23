@extends('back.layouts.app')
@section('content')
    <div class='flex flex-col items-center justify-center'>
        <h1 class='my-5'>Sorts de mage</h1>
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
        <button class='bg-green-400 p-3 rounded mb-5'><a href='{{ route('magesort.create') }}'>Create</a></button>
        <table class='table'>
            <thead>
                <tr>
                    <th>#</th>
                    <th class='text-center'>Sort</th>
                    <th class='text-center'>Niveau</th>
                    <th class='text-center'>Ecole</th>
                    <th class='text-center'>Incantation</th>
                    <th class='text-center'>Concentration</th>
                    <th class='text-center'>Description</th>
                    <th class='text-center'>Portee</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($magesorts as $magesort)
                    <tr>
                        <th class='text-center'>{{ $magesort->id }}</th>
                        <td class='text-center'>{{ $magesort->sort }}</td>
                        <td class='text-center'>{{ $magesort->niveau }}</td>
                        <td class='text-center'>{{ $magesort->ecole }}</td>
                        <td class='text-center'>{{ $magesort->incantation }}</td>
                        <td class='text-center'>{{ $magesort->concentration }}</td>
                        <td class='text-center'>{{ $magesort->description }}</td>
                        <td class='text-center'>{{ $magesort->portee }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='flex justify-around'>
                                <form action='{{ route('magesort.destroy', $magesort->id) }}' method='post'>
                                    @csrf
                                    <button class="rounded bg-red-400 p-3" type=submit>Delete</button>
                                    </form>
                                    <button class='rounded bg-yellow-400 p-3'><a href='{{ route('magesort.edit', $magesort->id) }}'>Edit</a></button>
                                    <button class='rounded bg-blue-400 p-3'><a href='{{ route('magesort.read', $magesort->id) }}'>Read</a></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
