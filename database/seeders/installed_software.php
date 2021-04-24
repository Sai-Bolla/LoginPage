<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class installed_software extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'installed_software';
        DB::table($table_name)->delete();
        DB::table($table_name) -> insert([
            'hardware_id' => '1',
            'software_id' => '3'
        ]);
        DB::table($table_name) -> insert([
            'hardware_id' => '3',
            'software_id' => '2'
        ]);
        DB::table($table_name) -> insert([
            'hardware_id' => '2',
            'software_id' => '2'
        ]);
    }
}
