<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class problem_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'problem_type';
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'name'=>'Computer Freezes',
            'description' => 'Computer just freezes',
            'parent_type' => -1
        ]);
        DB::table($table_name)->insert([
            'name'=>'Word is not responding',
            'description' => 'Word is not responding at all',
            'parent_type' => -1
        ]);
        DB::table($table_name)->insert([
            'name'=>'T800 is killing the wrong people',
            'description' => 'T800 keeps killing the scientists',
            'parent_type' => -1
        ]);
        DB::table($table_name)->insert([
            'name'=>'T800 seizes to function',
            'description' => 'Self repair function in T800 not working',
            'parent_type' => 3
        ]);
    }
}
