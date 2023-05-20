<?php

namespace Database\Seeders;

use App\Models\Cookies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class CookiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Cookies::truncate();
        });

        Cookies::insert([
            ['name' => 'Jeżyki Classic', 'type' => 'Ciastka w czekoladzie', 'description' => 'Kruche ciastka z karmelem, posypane prażonymi orzechami i bakaliami, oblane mleczną czekoladą.',
            'price' => '4.99', 'quantity' => '50.00', 'exp_date' => '2025-06-19'],
        ]);
    }
}
