<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client  extends Model
{

    protected $table = 'clients';

    protected $fillable = [
        'name',
        'surname',
        'gender',
        'emb',
        'phone_number',
        'timestamps'
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

    public  function getSurname():string
    {
        return $this->getAttribute('surname');
    }

    public function setSurname(string $surname)
    {
        $this->setAttribute('surname', $surname);
    }

    public function getGender():string
    {
        return $this->getAttribute('gender');
    }

    public function setGender(string $gender)
    {
        $this->setAttribute('gender', $gender);
    }

    public function getEmb()
    {
        return $this->getAttribute('emb');
    }

    public function setEmb(string $emb)
    {
        $this->setAttribute('emb', $emb);
    }

    public function getPhoneNumber():string
    {
        return $this->getAttribute('phone_number');
    }

    public function setPhoneNumber(string $phoneNumber)
    {
        $this->setAttribute('phone_number', $phoneNumber);
    }
    public function Vehicle()
    {
        return $this->belongsTo(Vehicle::class,'vehicle_id','id');
    }

}