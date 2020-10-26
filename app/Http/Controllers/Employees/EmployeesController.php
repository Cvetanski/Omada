<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Http\Request;
use Exception;

class EmployeesController extends Controller
{

    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', [
            'employees' => $employees
        ]);
    }

    public function create()
    {
        $types = EmployeeType::all();

        return view('employees.create', [
            'types' => $types
        ]);
    }

    public function store(Request $request)
    {
        $employee = new Employee($request->all());

        $employee->save();

        return redirect()->route('employees.index');
    }






//    public function destroy(int $id)
//    {
//        try {
//            $employee = Employee::findOrFail($id);
//            $employee->delete();
//        } catch (Exception $e) {
//            session()->flash('error', $e->getMessage());
//
//            return redirect()->back();
//        }
//
//        return redirect()->back();
//    }

}