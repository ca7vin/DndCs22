@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Backgrounds</h1>
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
                    <th scope='col'>backgroundName</th>
                    <th scope='col'>caractUpgrade</th>
                    <th scope='col'>speedUpgrade</th>
                    <th scope='col'>vision</th>
                    <th scope='col'>sens</th>
                    <th scope='col'>langues</th>
                    <th scope='col'>profienciesUpgrade</th>
                    <th scope='col'>weaponUpgrade</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($backgrounds as $background)
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
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('background.read', $background->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
