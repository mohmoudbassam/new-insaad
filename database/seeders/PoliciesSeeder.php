<?php

namespace Database\Seeders;

use App\Models\Policies;
use Illuminate\Database\Seeder;

class PoliciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Policies::factory()->create();

    }
}
