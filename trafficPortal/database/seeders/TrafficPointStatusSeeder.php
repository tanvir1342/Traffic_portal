<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrafficPointStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('traffic_point_statuses')->insert([
            'tps_id' => 11111,
            'schedule_name' => 'schedule name 1',
            'status' => 'status 1',
            'avarage_vechile' => 22,
            'tp_id' => 33221,
        ]);
        DB::table('traffic_point_statuses')->insert([
            'tps_id' => 2222,
            'schedule_name' => 'schedule name 2',
            'status' => 'status 2',
            'avarage_vechile' => 43,
            'tp_id' => 53464,
        ]);
    }
}
