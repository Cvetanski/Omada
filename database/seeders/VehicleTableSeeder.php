<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Vehicle;


class VehicleTableSeeder extends Seeder
{

    public function run()
    {
        $vehicle = new Vehicle();

        $vehicle->setName('Toyota');
        $vehicle->setNumberOfCar('15');
        $vehicle->setNumberOfDoor('5');
        $vehicle->setNumberOfModel('E150');
        $vehicle->setQuantityOfStock('5');

        $vehicle->save();


        $vehicle = new Vehicle();

        $vehicle->setName('Nissan');
        $vehicle->setNumberOfCar('2');
        $vehicle->setNumberOfDoor('5');
        $vehicle->setNumberOfModel('370Z');
        $vehicle->setQuantityOfStock('1');

        $vehicle->save();

    }

}