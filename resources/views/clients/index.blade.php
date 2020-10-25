@extends('layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>EMB</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>
                    {{$client->getName()}}
                </td>
                <td>
                    {{$client->getSurname()}}
                </td>
                <td>
                    {{$client->getGender()}}
                </td>
                <td>
                    {{$client->getPhoneNumber()}}
                </td>
                <td>
                    {{$client->getEmb()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('clients.create')}}" class="btn btn-info">Add Client</a>
@endsection