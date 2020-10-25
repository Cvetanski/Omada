<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
        $this->call(EmployeeTypesSeeder::class);
        $this->call(EmployeesTableSeeder::class);
    }

}

