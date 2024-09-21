<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_settings = array(
            array('id' => '1', 'key' => 'paypal_status', 'value' => 'active', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-11 11:28:53'),
            array('id' => '2', 'key' => 'paypal_account_mode', 'value' => 'sandbox', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-06 10:38:08'),
            array('id' => '3', 'key' => 'paypal_country_name', 'value' => 'US', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-06 14:44:50'),
            array('id' => '4', 'key' => 'paypal_currency_name', 'value' => 'USD', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-07 02:52:09'),
            array('id' => '5', 'key' => 'paypal_currency_rate', 'value' => '1', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-07 02:52:09'),
            array('id' => '6', 'key' => 'paypal_client_id', 'value' => 'AYvTTa34D5Pi8ITlprZ568r7iCiYoxubjMQ0gLG-WtOyC1iB8WWTkVrtQnKhgR7okqTAmkwM5GmT17FH', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-06 10:38:08'),
            array('id' => '7', 'key' => 'paypal_client_secret', 'value' => 'EFxjDkHMDNDZCkqe6gDHJUZCe29JWr4JMhcRF_OTDBmaZuCbob8K_EnCy0DB9dmJf6FcrKIsyji4eok9', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-06 10:38:08'),
            array('id' => '8', 'key' => 'paypal_app_id', 'value' => 'client_app_id', 'created_at' => '2024-08-03 16:28:26', 'updated_at' => '2024-08-03 16:28:26'),
            array('id' => '9', 'key' => 'stripe_status', 'value' => 'active', 'created_at' => '2024-08-10 12:14:18', 'updated_at' => '2024-08-10 12:14:18'),
            array('id' => '10', 'key' => 'stripe_country_name', 'value' => 'US', 'created_at' => '2024-08-10 12:14:18', 'updated_at' => '2024-08-10 12:14:18'),
            array('id' => '11', 'key' => 'stripe_currency_rate', 'value' => '1', 'created_at' => '2024-08-10 12:14:18', 'updated_at' => '2024-08-10 12:14:18'),
            array('id' => '12', 'key' => 'stripe_publishable_key', 'value' => 'pk_test_51Pm7ugF8SYKlKIl95mqTuR9BWZST5OajmyK8qK8aCv8NfYzCjCX7MwQCZfczpgnwTdcyPZVTCATfRw2z8C9wDjVh00xoLGAmtm', 'created_at' => '2024-08-10 12:14:18', 'updated_at' => '2024-08-10 12:14:18'),
            array('id' => '13', 'key' => 'stripe_secret_key', 'value' => 'sk_test_51Pm7ugF8SYKlKIl9fJxjGVXO3pIkfBj1Cw84koeuHY4J8LCrs38Gh1QOxPD2tWDDITztooH2AmdSZVHeCfF27weH00SoaL4jqU', 'created_at' => '2024-08-10 12:14:18', 'updated_at' => '2024-08-10 12:14:18'),
            array('id' => '14', 'key' => 'stripe_currency_name', 'value' => 'USD', 'created_at' => '2024-08-10 12:16:06', 'updated_at' => '2024-08-10 12:16:06'),
            array('id' => '15', 'key' => 'razorpay_status', 'value' => 'inactive', 'created_at' => '2024-08-10 15:36:46', 'updated_at' => '2024-08-11 11:28:45'),
            array('id' => '16', 'key' => 'razorpay_country_name', 'value' => 'IN', 'created_at' => '2024-08-10 15:36:46', 'updated_at' => '2024-08-10 15:36:46'),
            array('id' => '17', 'key' => 'razorpay_currency_rate', 'value' => '83.19', 'created_at' => '2024-08-10 15:36:46', 'updated_at' => '2024-08-10 15:36:46'),
            array('id' => '18', 'key' => 'razorpay_currency_name', 'value' => 'INR', 'created_at' => '2024-08-10 15:36:46', 'updated_at' => '2024-08-10 15:36:46'),
            array('id' => '19', 'key' => 'razorpay_key', 'value' => 'rzp_test_K7CipNQYyyMPiS', 'created_at' => '2024-08-10 15:36:46', 'updated_at' => '2024-08-10 15:48:57'),
            array('id' => '20', 'key' => 'razorpay_secret_key', 'value' => 'zSBmNMorJrirOrnDrbOd1ALO', 'created_at' => '2024-08-10 15:36:46', 'updated_at' => '2024-08-10 15:48:57')
        );

        \DB::table('payment_settings')->insert($payment_settings);
    }
}
