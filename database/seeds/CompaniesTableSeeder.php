<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Business Gossip',
            'email' => 'businessgossip@gmail.com',
            'number'=> '01857527445',
            'address'=> 'Dhaka',
            'description' => 'companies',
            'logo' => 'business-5d713b7144ed9.png'
        ]);
    }
}
