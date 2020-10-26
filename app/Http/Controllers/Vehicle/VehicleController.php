<?php


namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Vehicle;


class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.index', [
            'vehicles' => $vehicles
        ]);
    }

    public function store(Request $request)
    {
        $vehicle = new Vehicle($request->all());

//        dd($request);
        $vehicle->save();

        return redirect()->route('vehicles.index');
    }

    public function create()
    {
        $vehicles = Vehicle::all();

        return view('vehicles.create', [
            'vehicles' => $vehicles
        ]);
    }









//    public function destroy(int $id)
//    {
//        try {
//            $vehicle = Vehicle::findOrFail($id);
//            $vehicle->delete();
//        } catch (Exception $e) {
//            session()->flash('error', $e->getMessage());
//
//            return redirect()->back();
//        }
//
//        return redirect()->back();
//    }
}