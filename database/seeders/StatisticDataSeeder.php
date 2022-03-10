<?php

namespace Database\Seeders;

use App\Models\StatisticData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        StatisticData::factory(150000)->create();
    }
}
