<?php

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
        // $this->call(UsersTableSeeder::class);
         $this->call(ProfileInfosTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(BusinessStagesTableSeeder::class);
         $this->call(BusinessSizesTableSeeder::class);
         $this->call(ProfessionTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(CompaniesTableSeeder::class);
         $this->call(AboutUsTableSeeder::class);
         $this->call(OurFeatureTableSeeder::class);
         $this->call(TestimonialTableSeeder::class);
    }
}
