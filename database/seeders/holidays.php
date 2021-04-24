<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class holidays extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name='Holidays';
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'EmployeeNumber'=>1,
            'StartDate'=>\Carbon\Carbon::now()->toDateTimeString(),
            'timeOff'=>3
        ]);
        DB::table($table_name)->insert([
            'EmployeeNumber'=>2,
            'StartDate'=>\Carbon\Carbon::now()->toDateTimeString(),
            'timeOff'=>4
        ]);
        DB::table($table_name)->insert([
            'EmployeeNumber'=>3,
            'StartDate'=>\Carbon\Carbon::now()->toDateTimeString(),
            'timeOff'=>6
        ]);
    }
}
