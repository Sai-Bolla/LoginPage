<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class personell extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table_name = 'Personell';
        DB::table($table_name)->delete();
        DB::table($table_name)->insert([
            'FirstName'=>'Mark',
            'LastName'=>'Zuckemberg',
            'EmployeePhoneNumber'=>'+1 (0)7568767',
            'EmployeeEmailAdress'=>'mark@facebook.com',
            'DepartmentID'=>1,
            'Username'=>'mark@home',
            'Password'=>Hash::make('password'),
            'Job'=>'System Administrator'
        ]);
        DB::table($table_name)->insert([
            'FirstName'=>'Bill',
            'LastName'=>'Gates',
            'EmployeePhoneNumber'=>'+1 (0)7568767',
            'EmployeeEmailAdress'=>'bill@gates.com',
            'DepartmentID'=>1,
            'Username'=>'bill@home',
            'Password'=>Hash::make('password'),
            'Job'=>'Analyst'
        ]);
        DB::table($table_name)->insert([
            'FirstName'=>'Mark',
            'LastName'=>'Stanley',
            'EmployeePhoneNumber'=>'+44 7676754533',
            'EmployeeEmailAdress'=>'mark@makeitall.com',
            'DepartmentID'=>4,
            'Username'=>'markStan',
            'Password'=>Hash::make('password'),
            'Job'=>'Specialist'
        ]);
    }
}
