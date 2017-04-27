<?php

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        Student::create([
            'email' => 'user1@gmail.com',
            'password' => bcrypt('123456'),
            'payment_first_name' => 'Test',
            'payment_last_name' => 'User',
            'payment_company_name' => 'Com1',
            'payment_country' => 'VN',
            'payment_address' => 'So 1',
            'payment_city' => 'HN',
            'payment_post_code' => '123456',
            'payment_phone_number' => '0123456789',
            'payment_email' => 'user1@gmail.com', 
            'recieve_first_name' => 'Testt',
            'recieve_last_name' => 'Userr',
            'recieve_company_name' => 'Com1',
            'recieve_country' => 'VN',
            'recieve_address' => 'So 11',
            'recieve_city' => 'HN',
            'recieve_post_code' => '123456'
        ]);
    }
}
