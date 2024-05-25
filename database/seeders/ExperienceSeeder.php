<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::insert([
            ['name' => 'Fresher'],
            ['name' => '1 Year'],
            ['name' => '2 Year'],
            ['name' => '3+ Year'],
            ['name' => '5+ Year'],
            ['name' => '8+ Year'],
            ['name' => '10+ Year'],
            ['name' => '15+ Year'],
        ]);
    }
}
