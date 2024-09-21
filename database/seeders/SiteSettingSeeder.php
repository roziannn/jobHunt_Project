<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $site_settings = array(
            array('id' => '1', 'key' => 'site_name', 'value' => 'Joblist', 'created_at' => '2024-08-07 03:45:01', 'updated_at' => '2024-09-09 14:10:19'),
            array('id' => '2', 'key' => 'site_email', 'value' => 'xipusev@mailinator.com', 'created_at' => '2024-08-07 03:45:01', 'updated_at' => '2024-08-07 03:45:01'),
            array('id' => '3', 'key' => 'site_phone', 'value' => '0918291212', 'created_at' => '2024-08-07 03:45:01', 'updated_at' => '2024-08-07 03:45:01'),
            array('id' => '4', 'key' => 'site_default_currency', 'value' => 'USD', 'created_at' => '2024-08-07 03:45:01', 'updated_at' => '2024-08-07 03:49:50'),
            array('id' => '5', 'key' => 'site_currency_icon', 'value' => '$', 'created_at' => '2024-08-07 03:45:01', 'updated_at' => '2024-08-07 03:45:01'),
            array('id' => '6', 'key' => 'site_map', 'value' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.322911804986!2d106.78085347570946!3d-6.221081993766939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1328304779d%3A0x58635aeb951ccaec!2sGrand%20ITC%20Permata%20Hijau!5e0!3m2!1sen!2sid!4v1725891190625!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 'created_at' => '2024-09-09 14:07:03', 'updated_at' => '2024-09-09 14:13:19')
        );

        \DB::table('site_settings')->insert($site_settings);
    }
}
