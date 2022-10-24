<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DutyListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('duty_lists')->insert([
            'd_id' => 32545,
            'time' => '12:45:23',
            'date' => '2022-09-26',
            'schedule_name' => 'Morning',
            'employe_id' => 89523,
            'tp_id' => 20035,
        ]);
        DB::table('duty_lists')->insert([
            'd_id' => 90023,
            'time' => '10:49:53',
            'date' => '2022-11-09',
            'schedule_name' => 'Evening',
            'employe_id' => 47032,
            'tp_id' => 17346,
        ]);
    }
}
