<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class problem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'problem';
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'description' => 'Computer Freezes and crashes',
            'problem_type' => 1,
            'time_of_solution' => \Carbon\Carbon::now()->toDateTimeString(),
            'solution' => 'Smash the computer in the wall',
            'hardware' => 2,
            'software' => 1
        ]);
        DB::table($table_name)->insert([
            'description' => 'T800 malfunctions and goes rogue',
            'problem_type' => 3,
            'time_of_solution' => \Carbon\Carbon::now()->toDateTimeString(),
            'solution' => 'Replace neural CPU',
            'hardware' => 1,
            'software' => 3
        ]);
    }
}
