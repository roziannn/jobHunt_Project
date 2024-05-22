<?php

namespace Database\Seeders;

use App\Models\OrganizationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizationTypes = [
            'Government',
            'Semi Government',
            'Public',
            'Private',
            'NGO',
            'International Agencies'
        ];

        foreach ($organizationTypes as $type) {
            $organizationType = new OrganizationType();
            $organizationType->name = $type;
            $organizationType->save();
        }
    }
}
