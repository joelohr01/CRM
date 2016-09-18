@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $client->clientname }} - Details</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h1>Company Details</h1>
                            </div>
                            <div class="col-md-4">
                                <h1>{{ $client->clientname }}</h1>
                                <address>
                                    {{ $client->address }}<br>
                                    {{ $client->city }}, {{ $client->state }} {{ $client->zipcode }}
                                </address>
                                <p><a href="tel:{{ $client->phone }}">{{ $client->phone }}</a></p>
                                <p><a href="mailto:{{ $client->email }}">{{ $client->email }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
