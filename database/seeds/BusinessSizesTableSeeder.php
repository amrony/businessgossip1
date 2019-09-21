<?php

use Illuminate\Database\Seeder;

class BusinessSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\BusinessSize::all()->each->delete();

        $data = [
          ['name' => '1-10 Employees'],
          ['name' => '10-50 Employees'],
          ['name' => '51-200 Employees'],
          ['name' => '201-500 Employees'],
          ['name' => '501-1000 Employees'],
          ['name' => '1000+ Employees']
        ];
        foreach ($data as $row){
            \App\BusinessSize::create($row);
        }
    }
}
