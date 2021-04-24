<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class problem_form extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name ='ProblemForm';
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'ProblemRef'=>1,
            'Notes'=>'Computer freezes and the files that I am working on currently are wiped',
            'ReporterID'=>'1'
        ]);
        DB::table($table_name)->insert([
            'ProblemRef'=>2,
            'Notes'=>'T800 just goes rogue and attacks people',
            'ReporterID'=>'2'
        ]);
    }
}
