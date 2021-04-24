<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class assigned_problems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'AssignedProblem';
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'EmployeeID'=>3,
            'ProblemID'=>1
        ]);
        DB::table($table_name)->insert([
            'EmployeeID'=>3,
            'ProblemID'=>2
        ]);
    }
}
