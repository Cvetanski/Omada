<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Framework\returnArgument;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'surname',
        'emb',
        'type_id'
    ];

    public function getId(): int
    {
        return (int)$this->getAttribute('id');
    }

    public function getName():string
    {
        return $this->getAttribute('name');
    }

    public function setName(string $name)
    {
        $this->setAttribute('name', $name);
    }

    public function getSurname():string
    {
        return $this->getAttribute('surname');
    }

    public function setSurname(string $surname)
    {
        $this->setAttribute('surname', $surname);
    }

    public function setEmb(string $emb)
    {
        $this->setAttribute('emb', $emb);
    }

    public function getEmb()
    {
        return $this->getAttribute('emb');
    }

    public function type()
    {
        return $this->belongsTo(EmployeeType::class, 'type_id');
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType(EmployeeType $type)
    {
        $this->type()->associate($type);
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
