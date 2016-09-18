@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                            <table class="table">
                                @foreach($clients as $client)
                                    <tr>
                                        <td><a href="{{ route('clients.show', $client->id) }}">{{ $client->clientname }}</a></td>
                                        <td>{{ $client->phone }}</td>
                                        <td>{{ $client->email }}</td>
                                    </tr>
                                @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
