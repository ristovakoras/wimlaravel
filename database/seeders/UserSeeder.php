<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.macan',
            'password' => bcrypt('12345')
        ]);

        $admin->assignRole('admin');


        $kemenhub = User::create([
            'name' => 'Kemenhub Role',
            'email' => 'kemenhub@role.gov' ,
            'password' => bcrypt('12345')
        ]);

        $kemenhub->assignRole('kemenhub');


        $losarang = User::create([
            'name' => 'Losarang Role',
            'email' => 'losarang@role.gov' ,
            'password' => bcrypt('12345')
        ]);

        $losarang->assignRole('losarang');


        $kulwaru = User::create([
            'name' => 'Kulwaru Role',
            'email' => 'kulwaru@role.gov' ,
            'password' => bcrypt('12345')
        ]);

        $kulwaru->assignRole('kulwaru');

        $device = User::create([
            'name' => 'Device Role',
            'email' => 'device@role.test' ,
            'password' => bcrypt('12345')
        ]);

        $device->assignRole('device');
    }
}
