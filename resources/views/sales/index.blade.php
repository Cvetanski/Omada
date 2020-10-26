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
                    {{$sale->getAgent()->getSurname()}}
                </td>
                <td>
                    {{$sale->getClient()->getName()}}
                    {{$sale->getClient()->getSurname()}}
                </td>
                <td>
                    {{$sale->getVehicle()->getName()}}
                    {{$sale->getVehicle()->getNumberOfCar()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection