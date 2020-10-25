@extends('layout')

@section('content')
    <form method="POST" action="{{route('clients.store')}}" style="width: 30%">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter surname" name="surname">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Gender" name="gender">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter Phone Number" name="phone number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter EMB" name="emb">
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection