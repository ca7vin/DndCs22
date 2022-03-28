@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Pnjs</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $pnj->id }}</th>
                    <td>{{ $pnj->prenom }}</td>
                    <td>{{ $pnj->nom }}</td>
                    <td>{{ $pnj->age }}</td>
                    <td>{{ $pnj->image }}</td>
                    <td>{{ $pnj->description }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('pnj.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
