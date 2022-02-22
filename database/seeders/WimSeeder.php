<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Db;
use Illuminate\support\Str;

class WimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //insert data dammy wim
            DB::table('wim')->insert([
                'id'=> '1',
                'time'=> '2022-12-31 23:56:53',
                'lp'=> 'A 1234 VAK',
                'weight_reading'=>'100',
                'weight_over'=>'10',
                'height'=>'500',
                'width'=>'100',
                'length'=>'50',
                'violations'=>'dilarang',
                'image'=>'nanti dulu',
            ]);

        }

    }

