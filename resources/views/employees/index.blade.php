@extends('layout')

@section('content')
    <table class="table ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Type</th>
                <th>EMB</th>
                <th>Total Sales</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>
                        {{$employee->getName()}}
                    </td>
                    <td>
                        {{$employee->getSurname()}}
                    </td>
                    <td>
                        {{$employee->getType()->getName()}}
                    </td>
                    <td>
                        {{$employee->getEmb()}}
                    </td>
                    <td>
                        {{$employee->getType()->getName() == 'Sales Agent' ? $employee->getSalesCount() : "N/A"}}
                    </td>
                    <td>
                        @if($employee->getType()->getName() == 'Sales Agent')
                            <a href="{{route('sales.add') . "?agent_id=" . $employee->getId()}}" class="btn btn-sm btn-success">
                                Add sale
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('employees.create')}}" class="btn btn-info">Add Employee</a>
@endsection