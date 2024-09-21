<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_menus = array(
            array('id' => '1', 'name' => 'Navigation Menu', 'created_at' => NULL, 'updated_at' => NULL),
            array('id' => '3', 'name' => 'Footer Menu One', 'created_at' => '2024-09-11 12:35:34', 'updated_at' => '2024-09-11 12:35:52'),
            array('id' => '4', 'name' => 'Footer Menu Two', 'created_at' => '2024-09-11 12:36:02', 'updated_at' => '2024-09-11 12:36:02'),
            array('id' => '5', 'name' => 'Footer Menu Three', 'created_at' => '2024-09-11 12:36:10', 'updated_at' => '2024-09-11 12:36:10'),
            array('id' => '6', 'name' => 'Footer Menu Four', 'created_at' => '2024-09-11 12:36:24', 'updated_at' => '2024-09-11 12:36:24')
        );

        \DB::table('admin_menus')->insert($admin_menus);
    }
}
