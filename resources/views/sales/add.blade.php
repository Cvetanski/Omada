@extends('layout')

@section('content')
    <form method="POST" action="{{route('sales.store')}}" style="width: 30%">
        {{csrf_field()}}
        <div class="form-group">
            <select class="form-control" id="name" name="client_id">
                @if(!$client)
                    <option disabled selected>Select client</option>
                @endif
                @foreach($allClients as $item)
                    <option value="{{$item->getId()}}" {{$client && $client->getId() == $item->getId() ? "selected" : ""}}>
                        {{$item->getName()}} {{$item->getSurname()}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="name" name="vehicle_id">
                @if(!$vehicle)
                    <option disabled selected>Select vehicle</option>
                @endif
                @foreach($allVehicles as $item)
                    <option value="{{$item->getId()}}" {{$vehicle && $vehicle->getId() == $item->getId() ? "selected" : ""}}>
                        {{$item->getName()}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="name" name="employee_id">
                @if(!$agent)
                    <option disabled selected>Select agent</option>
                @endif
                @foreach($allAgents as $item)
                    <option value="{{$item->getId()}}" {{$agent && $agent->getId() == $item->getId() ? "selected" : ""}}>
                        {{$item->getName()}} {{$item->getSurname()}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection