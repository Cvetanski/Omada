@extends('layout')

@section('content')
    <form method="POST" action="{{route('employees.store')}}" style="width: 30%">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter surname" name="surname">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="Enter EMB" name="emb">
        </div>
        <div class="form-group">
            <select class="form-control" id="name" name="type_id">
                <option disabled selected>Select employee type</option>
                @foreach($types as $type)
                    <option value="{{$type->getId()}}">{{$type->getName()}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection