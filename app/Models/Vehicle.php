<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{

    protected  $table = 'vehicles';

    protected $fillable = [
        'brand_name',
        'vehicle_number',
        'number_of_doors',
        'model_number',
        'quantity_of_stock',
    ];

    public function getId(): int
    {
        return (int)$this->getAttribute('id');
    }

    public function getName():string
    {
        return $this->getAttribute('brand_name');
    }

    public function setName(string $brandName)
    {
        $this->setAttribute('brand_name',$brandName);
    }

    public function getNumberOfCar():string
    {
        return $this->getAttribute('vehicle_number');
    }

    public function setNumberOfCar(string $numberOfVehicle)
    {
        $this->setAttribute('vehicle_number', $numberOfVehicle);
    }

    public function getNumberOfDoor():string
    {
        return $this->getAttribute('number_of_doors');
    }

    public function setNumberOfDoor(string $numberOfDoors)
    {
        $this->setAttribute('number_of_doors', $numberOfDoors);
    }

    public function getNumberOfModel():string
    {
        return $this->getAttribute('model_number');
    }

    public function setNumberOfModel(string $modelNumber)
    {
        $this->setAttribute('model_number', $modelNumber);
    }

    public function getQuantityOfStock():string
    {
        return $this->getAttribute('quantity_of_stock');
    }

    public function setQuantityOfStock(string $quantityOfStock)
    {
        $this->setAttribute('quantity_of_stock', $quantityOfStock);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function getSalesCount()
    {
        return $this->sales()->count();
    }
}

