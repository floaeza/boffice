<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PackageSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(StationSeeder::class);
        $this->call(ChannelDataSeeder::class);
        $this->call(ChannelSeeder::class);
        $this->call(DeviceSeeder::class);
    }
}
