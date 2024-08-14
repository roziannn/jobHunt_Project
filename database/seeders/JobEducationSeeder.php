<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $education = [
            'Intermediate',
            'Bachelor Degree',
            'Magister Degree',
            'PhD',
            'High School',
            'Any',
        ];

        foreach ($education as $item) {
            $create = new Education();
            $create->name = $item;
            $create->save();
        }
    }
}
