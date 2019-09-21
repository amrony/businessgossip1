<?php

use Illuminate\Database\Seeder;

class BusinessStagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\BusinessStage::all()->each->delete();

        $data = [
            [ 'name' => 'Idea'],
            [ 'name' => 'Startup'],
            [ 'name' => 'Growth'],
            [ 'name' => 'Established'],
        ];

        foreach ($data as $row){
            \App\BusinessStage::create($row);
        }





//        \App\BusinessStage::all()->each->delete();

//        $data = [
//          ['id' => 1, 'name' => 'Idea'],
//          ['id' => 2, 'name' => 'Startup'],
//          ['id' => 3, 'name' => 'Growth'],
//          ['id' => 4, 'name' => 'Established'],
//        ];
//
//        foreach ($data as $row){
//            \App\BusinessStage::create($row);
//        }

    }
}
