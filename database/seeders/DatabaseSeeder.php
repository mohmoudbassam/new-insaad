<?php

namespace Database\Seeders;

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
        $this->call(PermissionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(PoliciesSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(CountTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ApplicationSeeder::class);
    }
}
