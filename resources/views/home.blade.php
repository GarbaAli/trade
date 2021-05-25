@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             
        <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Adress Bitcoins</th>
                                    <th>Email</th>
                                    <th>Montant</th>
                                    <th>inscript le, </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->username}}</td>
                                    <td> {{$client->adresse}} </td>
                                    <td> {{$client->email}} </td>
                                    <td class="process">{{$client->montant}}</td>
                                    <td>{{$client->created_at->format('d-m-y a H:m')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                    <div>
                        {{$clients->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
