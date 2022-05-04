@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Races</h1>
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
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>race</th>
                    <th scope='col'>caract</th>
                    <th scope='col'>vitesse</th>
                    <th scope='col'>taille</th>
                    <th scope='col'>maitrise</th>
                    <th scope='col'>features</th>
                    <th scope='col'>langue</th>
                    <th scope='col'>sort</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($races as $race)
                    <tr>
                        <th scope='row'>{{ $race->id }}</th>
                        <td>{{ $race->race }}</td>
                        <td>{{ $race->caract }}</td>
                        <td>{{ $race->vitesse }}</td>
                        <td>{{ $race->taille }}</td>
                        <td>{{ $race->maitrise }}</td>
                        <td>{{ $race->features }}</td>
                        <td>{{ $race->langue }}</td>
                        <td>{{ $race->sort }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('race.read', $race->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
