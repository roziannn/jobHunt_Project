<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professions = [
            'Software Developer',
            'Web Designer',
            'Data Scientist',
            'Digital Marketer',
            'UX/UI Designer',
            'Network Administrator',
            'Content Creator',
            'Project Manager',
            'Graphic Designer',
            'Database Administrator',
            'Cybersecurity Analyst',
            'Systems Analyst',
            'Mobile App Developer',
            'Game Developer',
            'Technical Writer',
            'DevOps Engineer',
            'Cloud Architect',
            'Business Analyst',
            'UI/UX Developer',
            'Artificial Intelligence Engineer',
        ];

        foreach ($professions as $profession) {
            $data = new Profession();
            $data->name = $profession;
            $data->save();
        }
    }
}
