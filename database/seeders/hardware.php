<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hardware extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'hardware';
        DB::table($table_name) -> delete();
        DB::table($table_name) -> insert([
            'hardware_type' => 'T800',
            'notes' => 'Security forces for our offices'
        ]);
        DB::table($table_name) -> insert([
            'hardware_type' => 'Apple Mac Pro',
            'notes' => 'Calculate Excel Spreadsheets'
        ]);
        DB::table($table_name) -> insert([
            'hardware_type' => 'Dell Latitude 5086',
            'notes' => 'AutoCAD designer'
        ]);
    }
}
