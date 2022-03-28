@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Pnjs</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn btn-success' href='{{ route('pnj.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>prenom</th>
                    <th scope='col'>nom</th>
                    <th scope='col'>age</th>
                    <th scope='col'>image</th>
                    <th scope='col'>description</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($pnjs as $pnj)
                    <tr>
                        <th scope='row'>{{ $pnj->id }}</th>
                        <td>{{ $pnj->prenom }}</td>
                        <td>{{ $pnj->nom }}</td>
                        <td>{{ $pnj->age }}</td>
                        <td>{{ $pnj->image }}</td>
                        <td>{{ $pnj->description }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('pnj.destroy', $pnj->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('pnj.edit', $pnj->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('pnj.read', $pnj->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
