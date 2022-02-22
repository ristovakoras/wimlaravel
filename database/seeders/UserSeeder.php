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
            'email' => 'admin@role.test',
            'password' => bcrypt('12345')
        ]);

        $admin->assignRole('admin');


        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@role.test' ,
            'password' => bcrypt('12345')
        ]);

        $user->assignRole('user');


        $device = User::create([
            'name' => 'Device Role',
            'email' => 'device@role.test' ,
            'password' => bcrypt('12345')
        ]);

        $device->assignRole('device');
    }
}
