<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'Employee_id' => 1,
                'first_name' => 'Bob',
                'last_name' => 'Kinto',
                'salary' => 1000000,
                'joining_date' => '2019-01-20',
                'department' => 'Finance',
            ],
            [
                'Employee_id' => 2,
                'first_name' => 'Jerry',
                'last_name' => 'Kansxo',
                'salary' => 6000000,
                'joining_date' => '2019-01-15',
                'department' => 'IT',
            ],
            [
                'Employee_id' => 3,
                'first_name' => 'Philip',
                'last_name' => 'Jose',
                'salary' => 8900000,
                'joining_date' => '2019-02-05',
                'department' => 'Banking',
            ],
            [
                'Employee_id' => 4,
                'first_name' => 'John',
                'last_name' => 'Abraham',
                'salary' => 2000000,
                'joining_date' => '2019-02-25',
                'department' => 'Insurance',
            ],
            [
                'Employee_id' => 5,
                'first_name' => 'Michael',
                'last_name' => 'Mathew',
                'salary' => 2200000,
                'joining_date' => '2019-02-28',
                'department' => 'Finance',
            ],
            [
                'Employee_id' => 6,
                'first_name' => 'Alex',
                'last_name' => 'chreketo',
                'salary' => 4000000,
                'joining_date' => '2019-05-10',
                'department' => 'IT',
            ],
            [
                'Employee_id' => 7,
                'first_name' => 'Yohan',
                'last_name' => 'Soso',
                'salary' => 1230000,
                'joining_date' => '2019-06-20',
                'department' => 'Banking',
            ],
        ];

        DB::table('employees')->insert($data);
    }
}
