<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Exception;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }


    public function store(Request $request)
    {
        $client = new Client($request->all());

        $client->save();

        return redirect()->route('clients.index');
    }

    public function create()
    {
        $client = Client::all();

        return view('clients.create', [
            'client' => $client
        ]);
    }

    public function destroy(int $id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->delete();
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());

            return redirect()->back();
        }

        return redirect()->back();
    }

}