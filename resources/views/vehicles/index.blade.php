@extends('layout')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Brand Name</th>
            <th>Vehicle number</th>
            <th>Number of doors</th>
            <th>Number of model</th>
            <th>Quantity of stock</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>
                    {{$vehicle->getName()}}
                </td>
                <td>
                    {{$vehicle->getNumberOfCar()}}
                </td>
                <td>
                    {{$vehicle->getNumberOfDoor()}}
                </td>
                <td>
                    {{$vehicle->getNumberOfModel()}}
                </td>
                <td>
                    {{$vehicle->getQuantityOfStock()}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('vehicles.create')}}" class="btn btn-info">Add Vehicle</a>
@endsection