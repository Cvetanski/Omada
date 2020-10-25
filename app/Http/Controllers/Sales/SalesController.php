<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Employee;
use App\Models\EmployeeType;
use App\Models\Sale;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sale::all();

        return view('sales.index', [
            'sales' => $sales
        ]);
    }

    public function addSale(Request $request)
    {
        try {
            $agent = null;
            $client = null;
            $vehicle = null;

            if ($agentId = $request->get('agent_id', null)) {
                $agent = Employee::findOrFail($agentId);
            }

            if ($clientId = $request->get('client_id', null)) {
                $client = Client::findOrFail($clientId);
            }

            if ($vehicleId = $request->get('vehicle_id', null)) {
                $vehicle = Vehicle::findOrFail($vehicleId);
            }

            $allClients = Client::all();
            $allVehicles = Vehicle::where('quantity_of_stock', '>', 0)->get()->all();

            $salesAgentType = EmployeeType::where('name', 'Sales Agent')->get()->first();
            $allAgents = Employee::where('type_id', $salesAgentType->getId())->get()->all();

        } catch (\Exception $e) {
            return redirect()->back();
        }

        return view('sales.add', [
            'agent' => $agent,
            'client' => $client,
            'vehicle' => $vehicle,
            'allAgents' => $allAgents,
            'allClients' => $allClients,
            'allVehicles' => $allVehicles
        ]);
    }

    public function store(Request $request)
    {
        $sale = new Sale($request->all());
        $sale->save();
        return redirect()->route('employees.index');
    }


}