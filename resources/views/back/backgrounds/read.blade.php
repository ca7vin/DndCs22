@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Backgrounds</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>backgroundName</th>
                    <th scope='col'>caractUpgrade</th>
                    <th scope='col'>speedUpgrade</th>
                    <th scope='col'>vision</th>
                    <th scope='col'>sens</th>
                    <th scope='col'>langues</th>
                    <th scope='col'>profienciesUpgrade</th>
                    <th scope='col'>weaponUpgrade</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $background->id }}</th>
                    <td>{{ $background->backgroundName }}</td>
                    <td>{{ $background->caractUpgrade }}</td>
                    <td>{{ $background->speedUpgrade }}</td>
                    <td>{{ $background->vision }}</td>
                    <td>{{ $background->sens }}</td>
                    <td>{{ $background->langues }}</td>
                    <td>{{ $background->profienciesUpgrade }}</td>
                    <td>{{ $background->weaponUpgrade }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('background.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
