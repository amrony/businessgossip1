<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OurFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('our_features')->insert([
            'title' => 'About us title',
            'short_description' => 'short description',
            'long_description'=> 'long description',
            'image'=> 'Image',
            'title_one'=> 'title one',
            'title_two'=> 'title two',
            'title_three'=> 'title three',
            'title_four'=> 'title four',
            'description_one'=> 'description one',
            'description_two'=> 'description two',
            'description_three'=> 'description three',
            'description_four'=> 'description four',
        ]);
    }
}
