<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    protected $table = 'employee_types';

    protected $fillable = ['name'];

    public function getId(): int
    {
        return (int)$this->getAttribute('id');
    }

    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    public function setName(string $name)
    {
        $this->setAttribute('name', $name);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'type_id', 'id');
    }
}