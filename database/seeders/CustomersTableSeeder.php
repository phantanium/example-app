<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => "Fahmi",
            'phone_number' => "0812121231",
            'email' => "lupanama@gmail.com",
            'gender' => "Laki-laki",
        ]);
        Customer::create([
            'name' => "Rina",
            'phone_number' => "0812121231",
            'email' => "lupanama@gmail.com",
            'gender' => "Laki-laki",
        ]);
    }
}