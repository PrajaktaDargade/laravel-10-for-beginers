<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
       student::create([
        'name' => 'Yahoo Baba',
        'email' => 'yahoobaba@gmail.com'
       ]);
    }
}
