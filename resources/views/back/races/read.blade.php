@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Races</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
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
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('race.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
