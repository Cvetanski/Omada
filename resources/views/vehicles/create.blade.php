@extends('layout')

@section('content')
    <form method="POST" action="{{route('vehicles.store')}}" style="width: 30%">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Brand Name" name="Brand Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Vehicle Number" name="vehicle number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Number of Door" name="number of door">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Number of model" name="number of model">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Quantity of Stock" name="Quantity of stock">
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection