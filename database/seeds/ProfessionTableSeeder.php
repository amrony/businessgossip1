<?php

use Illuminate\Database\Seeder;

class ProfessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Profession::all()->each->delete();
        $data = [
          ['name' => 'Exploring Entrepreneurship'],
          ['name' => 'Starting a Business'],
          ['name' => 'Running a Business'],
          ['name' => 'Working for a Business'],
        ];
        foreach ($data as $row){
            \App\Profession::create($row);
        }
    }
}
