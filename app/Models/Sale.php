<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\returnArgument;

class Sale extends Model
{
    protected  $table = 'sales';

    protected $fillable = ['employee_id', 'vehicle_id', 'client_id'];

    public function getId(): int
    {
        return (int)$this->getAttribute('id');
    }

    public function agent()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function getAgent(): Employee
    {
        return $this->agent;
    }

    public function setAgent(Employee $agent)
    {
        $this->agent()->associate($agent);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient(Client $client)
    {
        $this->client()->associate($client);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }

    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function setVehicle(Vehicle $vehicle)
    {
        $this->vehicle()->associate($vehicle);
    }

    public function getDate()
    {
        return new Carbon($this->getAttribute('created_at'));
    }
}