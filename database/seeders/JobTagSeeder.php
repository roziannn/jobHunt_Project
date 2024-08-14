<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $job_tags = array(
            "remote-friendly",
            "fully-distributed",
            "software-development",
            "data-science",
            "cybersecurity",
            "cloud-computing",
            "open-source-experience",
            "agile-methodology",
            "strong-communication-skills",
            "time-zone-flexibility",
            "global-collaboration",
            "startup-environment",
            "work-life-balance",
            "continuous-learning",
            "competitive-benefits",
            "equity-compensation",
            "high-growth-opportunity",
            "diverse-and-inclusive",
            "positive-company-culture",
            "impactful-work"
        );

        foreach ($job_tags as $item) {
            $create = new Tag();
            $create->name = $item;
            $create->save();
        }
    }
}
