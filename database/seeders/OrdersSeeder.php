<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Orders;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Orders::truncate();
        });

        Orders::insert(
            [
                [
                    'cost' => '127.00',
                    'address' => 'Rzeszów, Kopisto 21',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '55.50',
                    'address' => 'Warszawa, Północna 10',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'cost' => '92.80',
                    'address' => 'Kraków, Kwiatowa 5',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '33.20',
                    'address' => 'Gdańsk, Morska 15',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '76.90',
                    'address' => 'Wrocław, Słoneczna 8',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '18.70',
                    'address' => 'Łódź, Podwodna 3',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '42.40',
                    'address' => 'Poznań, Zielona 12',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'cost' => '68.50',
                    'address' => 'Katowice, Kwiatowa 9',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '95.20',
                    'address' => 'Szczecin, Rybacka 7',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '22.80',
                    'address' => 'Gdynia, Portowa 11',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'cost' => '37.60',
                    'address' => 'Bydgoszcz, Wiosenna 6',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '81.10',
                    'address' => 'Lublin, Lipowa 14',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '12.50',
                    'address' => 'Białystok, Polna 17',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '50.70',
                    'address' => 'Olsztyn, Leśna 19',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'cost' => '45.90',
                    'address' => 'Kielce, Kwiatowa 22',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '63.20',
                    'address' => 'Rzeszów, Kopisto 21',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '28.10',
                    'address' => 'Warszawa, Północna 10',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '37.80',
                    'address' => 'Kraków, Kwiatowa 5',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'cost' => '19.50',
                    'address' => 'Gdańsk, Morska 15',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '76.30',
                    'address' => 'Wrocław, Słoneczna 8',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '42.90',
                    'address' => 'Łódź, Podwodna 3',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '14.20',
                    'address' => 'Poznań, Zielona 12',
                    'order_status' => 'Opłacono'
                ],
                [
                    'cost' => '51.80',
                    'address' => 'Katowice, Kwiatowa 9',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'cost' => '32.50',
                    'address' => 'Szczecin, Rybacka 7',
                    'order_status' => 'Zakończone'
                ],
                [
                    'cost' => '48.60',
                    'address' => 'Gdynia, Portowa 11',
                    'order_status' => 'Opłacono'
                ],
            ]
        );
    }
}
