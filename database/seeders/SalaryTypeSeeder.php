<?php

namespace Database\Seeders;

use App\Models\SalaryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salary_types = array(
            "Monthly",
            "Hourly",
            "Yearly",
            "Project Basis",
        );

        foreach ($salary_types as $item) {
            $create = new SalaryType();
            $create->name = $item;
            $create->save();
        }
    }
}
