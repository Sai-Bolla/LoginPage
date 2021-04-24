<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hardware_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'hardware_type';
        DB::table($table_name) -> delete();
        DB::table($table_name) -> insert([
            'serial_number' => '800456',
            'hardware_name' => 'T800',
            'Description' => 'Advanced terminator model using live skin as a concealment device'
        ]);
        DB::table($table_name) -> insert([
            'serial_number' => 'Tfzg1235t',
            'hardware_name' => 'Apple MacBook Pro',
            'Description' => 'Apple MacBook used primarily for Apple Software development'
        ]);
        DB::table($table_name) -> insert([
            'serial_number' => 'Tfghtg1235t',
            'hardware_name' => 'Dell Latitude 5086',
            'Description' => 'Main System used for part designing'
        ]);
        DB::table($table_name) -> insert([
            'serial_number' => 'Tfghtg1235a',
            'hardware_name' => 'Apple Mac Pro',
            'Description' => 'Personal Computer used for excel processing'
        ]);
        DB::table($table_name) -> insert([
            'serial_number' => 'UNC7878',
            'hardware_name' => 'Endeavor',
            'Description' => 'Advanced Space Exploration vessel'
        ]);
    }
}
