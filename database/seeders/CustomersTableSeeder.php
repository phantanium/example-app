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
            'name' => "Naufal",
            'phone_number' => "08131231",
            'email' => "akasldk a@gmail.com",
            'gender' => "Laki-laki",
        ]);
        Customer::create([
            'name' => "nose",
            'phone_number' => "0123121231",
            'email' => "lukjaslkjda@gmail.com",
            'gender' => "Laki-laki",
        ]);
    }
}