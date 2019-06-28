<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Client::create([
            'first_name' => 'Lucas',
            'second_name' => '',
            'father_name' => 'Xavier',
            'mother_name' => 'Belmonte',
            'phone' => '+5917777777',
            'ci' => '11111',
            'gender' => 'MASCULINO',
            'birthday' => '2019-06-25',
            'status' => 'ACTIVO',
        ]);

    }
}
