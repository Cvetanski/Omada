@extends('layout')

@section('content')
    <form method="POST" action="{{route('vehicles.store')}}" style="width: 30%">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Brand Name" name="brand name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Vehicle Number" name="vehicle number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Number of Door" name="number of doors">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Number of model" name="model number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Quantity of Stock" name="quantity of stock">
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection