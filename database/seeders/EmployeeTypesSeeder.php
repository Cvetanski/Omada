<?php

namespace Database\Seeders;

use App\Models\EmployeeType;
use Illuminate\Database\Seeder;

class EmployeeTypesSeeder extends Seeder
{
    public function run()
    {
        $type = new EmployeeType();
        $type->setName('Sales Agent');
        $type->save();

        $type = new EmployeeType();
        $type->setName('Financial Agent');
        $type->save();

        $type = new EmployeeType();
        $type->setName('Secretary');
        $type->save();

        $type = new EmployeeType();
        $type->setName('Lawyer');
        $type->save();
    }
}
