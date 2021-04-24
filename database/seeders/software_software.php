<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class software_software extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'Software_Software';
        DB::table($table_name) -> delete();
        DB::table($table_name)->insert([
            'Software ID' => '1',
            'Operating System ID' => '10'
        ]);
    }
}
