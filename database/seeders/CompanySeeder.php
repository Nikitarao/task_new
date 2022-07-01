<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CompanySeeder extends Seeder
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
//        Company::create($company);
        company::factory()->count(10)->create();

    }
}
