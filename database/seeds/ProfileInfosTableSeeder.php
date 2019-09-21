<?php

use Illuminate\Database\Seeder;

class ProfileInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Industry::all()->each->delete();

        $data = [
            ['name' => 'Advertising & Marketing'],
            ['name' => 'Agriculture'],
            ['name' => 'Biotech/Pharmaceuticals'],
            ['name' => 'Construction & General Contracting'],
            ['name' => 'Consulting'],
            ['name' => 'E-Commerce'],
            ['name' => 'Education'],
            ['name' => 'Energy'],
            ['name' => 'Equipment Sales & Service'],
            ['name' => 'Financial Services'],
            ['name' => 'General'],
            ['name' => 'Government'],
            ['name' => 'Healthcare'],
            ['name' => 'Information Services'],
            ['name' => 'Insurance'],
            ['name' => 'Legal'],
            ['name' => 'Media & Entertainment'],
            ['name' => 'Non-Profit'],
            ['name' => 'Other'],
            ['name' => 'Real Estate'],
            ['name' => 'Restaurant'],
            ['name' => 'Retail'],
            ['name' => 'Services'],
            ['name' => 'Technology'],
            ['name' => 'Telecom/Utilities'],
            ['name' => 'Transportation/Logistics'],
            ['name' => 'Travel/Hospitality'],
            ['name' => 'Wholesale'],
        ];

        foreach ($data as $row){
            \App\Industry::create($row);
        }


    }
}
