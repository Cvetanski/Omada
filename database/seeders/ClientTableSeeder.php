<?php


namespace Database\Seeders;
use App\Models\Client;
use Illuminate\Database\Seeder;


class ClientTableSeeder extends Seeder
{


    public function run()
    {

        $client = new Client();

        $client->setName('Martin');
        $client->setSurname('Nedelkoski');
        $client->setGender('male');
        $client->setPhoneNumber('07843520');
        $client->setEmb('5546465');

        $client->save();

        $client1 = new Client();

        $client1->setName('John');
        $client1->setSurname('Doo');
        $client1->setGender('male');
        $client1->setPhoneNumber('1185655');
        $client1->setEmb('6344235234');

        $client->save();
    }
}