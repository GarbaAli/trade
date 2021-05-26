@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="mt-5">
                        
                <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse Bitcoin</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Inscrit le,</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                    <th scope="row"> {{$client->id}} </th>
                    <td>{{$client->username}}</td>
                    <td>{{$client->adresse}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->montant}}</td>
                    <td>{{$client->created_at->format('d-m-y a H:m')}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
@endsection
