<?php


namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends  Seeder
{

    public function run()
    {
        $employees = new Employee();

        $employees->setName('Patric');
        $employees->setSurname('Baumel');
        $employees->setEmb('656566');
        $employeeType = EmployeeType::where('name', 'Sales Agent')->get()->first();
        $employees->setType($employeeType);

        $employees->save();

        $employees = new Employee();

        $employees->setName('Richy');
        $employees->setSurname('Ahmed');
        $employees->setEmb('7789931');
        $employeeType = EmployeeType::where('name', 'Financial Agent')->get()->first();
        $employees->setType($employeeType);

        $employees->save();

        $employees = new Employee();

        $employees->setName('Amile');
        $employees->setSurname('Lens');
        $employees->setEmb('2346843');
        $employeeType = EmployeeType::where('name', 'Secretary')->get()->first();
        $employees->setType($employeeType);

        $employees->save();


        $employees = new Employee();

        $employees->setName('Sony');
        $employees->setSurname('Warton');
        $employees->setEmb('56548633');
        $employeeType = EmployeeType::where('name', 'Lawyer')->get()->first();
        $employees->setType($employeeType);

        $employees->save();

    }
}