@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Magesorts</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>sort</th>
                    <th scope='col'>niveau</th>
                    <th scope='col'>ecole</th>
                    <th scope='col'>incantation</th>
                    <th scope='col'>concentration</th>
                    <th scope='col'>description</th>
                    <th scope='col'>portee</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $magesort->id }}</th>
                    <td>{{ $magesort->sort }}</td>
                    <td>{{ $magesort->niveau }}</td>
                    <td>{{ $magesort->ecole }}</td>
                    <td>{{ $magesort->incantation }}</td>
                    <td>{{ $magesort->concentration }}</td>
                    <td>{{ $magesort->description }}</td>
                    <td>{{ $magesort->portee }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('magesort.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
