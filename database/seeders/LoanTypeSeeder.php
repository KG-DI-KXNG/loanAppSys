<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<3;$i++){
            DB::table('loan_types')->insert([
                'loan_nm' => Str::random(10),
                'loan_desc' => Str::random(25),
            ]);
        }
    }
}
