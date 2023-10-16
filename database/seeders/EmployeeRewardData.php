<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeRewardData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'Employee_ref_id' => 1,
                'date_reward' => '2019-05-11',
                'amount' => 1000,
            ],
            [
                'Employee_ref_id' => 2,
                'date_reward' => '2019-02-15',
                'amount' => 5000,
            ],
            [
                'Employee_ref_id' => 3,
                'date_reward' => '2019-04-22',
                'amount' => 2000,
            ],
            [
                'Employee_ref_id' => 1,
                'date_reward' => '2019-06-20',
                'amount' => 8000,
            ],
        ];

        DB::table('employee_rewards')->insert($data);

    }
}
