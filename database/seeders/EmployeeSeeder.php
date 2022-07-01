<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $company =[
//            'email'=>'admin@admin.com',
//            'password'=>bcrypt('password'),
//            'name'=>'Admin',
//        ];
//        Employee::create($company);
        Employee::factory()->count(10)->create();
    }
}
