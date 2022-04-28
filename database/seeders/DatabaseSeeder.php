<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
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
        $this->call(adminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(AgreementSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(SettingsTableSeeder::class);

    }
}
