<?php

namespace Database\Seeders;

use App\Models\Candies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class CandiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Candies::truncate();
        });

        Candies::insert([
            ['name' => 'Zozole', 'type' => 'Landrynki', 'description' => 'Owocowe cukierki landrynki z kwaśnym musującym proszkiem w środku.',
            'price' => '2.99', 'quantity' => '50.00', 'exp_date' => '2025-06-19'],
        ]);
    }
}
