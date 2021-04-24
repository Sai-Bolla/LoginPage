<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class software extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'software';
        //
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'software_name' => 'Microsoft Office',
            'software_description' => 'Used to create reports and text documents'
        ]);
        DB::table($table_name)->insert([
                'software_name' => 'AutoCAD',
                'software_description' => 'Used to design mechanical parts and run CFD models'
        ]);
        DB::table($table_name)->insert([
            'software_name' => 'Skynet',
            'software_description' => 'Super advanced weapons system commissioned by the US Army in order to prevent any
             future conflicts'
        ]);
        DB::table($table_name)->insert([
            'software_name' => 'PHP 7.0',
            'software_description' => 'Honestly, what is wrong with you?'
        ]);
        DB::table($table_name)->insert([
            'software_name' => 'Samantha',
            'software_description' => 'Powerful AI assistant'
        ]);
        DB::table($table_name) -> insert([
            'software_name' => 'HAL 9000',
            'software_description' => 'Advanced AI navigation and control system, in charge of life support and emotional
             support to the crew'
        ]);
    }
}
