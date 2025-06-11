<?php

namespace Database\Seeders;

use App\Models\CoFiringData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoFiringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CoFiringData::factory(10)->create();
    }
}
