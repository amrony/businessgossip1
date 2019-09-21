<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'title' => 'About us title',
            'short_description' => 'short description',
            'long_description'=> 'long description',
            'image'=> 'Image',
        ]);
    }
}
