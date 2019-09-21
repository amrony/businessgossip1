<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'testimonial',
            'designation' => 'developer',
            'image'=> 'image',
            'title'=> 'Testimonial title',
            'description'=> 'Description',
        ]);
    }
}
