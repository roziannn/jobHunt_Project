<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();

        $admin->name = 'Super Admin';
        $admin->email = 'superadmin@gmail.com';
        $admin->password = bcrypt('password');
        $admin->save();
    }
}
