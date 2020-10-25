@extends('layout')

@section('content')
    <table class="table ">
        <thead>
        <tr>
            <th>Employee</th>
            <th>Client</th>
            <th>Vehicle</th>
        </thead>
        <tbody>
        @foreach($sales as $sale)
            <tr>
                <td>
                    {{$sale->getAgent()->getName()}}
                </td>
                <td>
                    {{$sale->getClient()->getName()}}
                </td>
                <td>
                    {{$sale->getVehicle()->getName()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection