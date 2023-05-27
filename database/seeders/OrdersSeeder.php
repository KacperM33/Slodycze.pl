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
                    'id_transactions' => '1',
                    'cost' => '127.00',
                    'address' => 'Rzeszów, Kopisto 21',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '2',
                    'cost' => '55.50',
                    'address' => 'Warszawa, Północna 10',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'id_transactions' => '3',
                    'cost' => '92.80',
                    'address' => 'Kraków, Kwiatowa 5',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '4',
                    'cost' => '33.20',
                    'address' => 'Gdańsk, Morska 15',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '5',
                    'cost' => '76.90',
                    'address' => 'Wrocław, Słoneczna 8',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '6',
                    'cost' => '18.70',
                    'address' => 'Łódź, Podwodna 3',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '7',
                    'cost' => '42.40',
                    'address' => 'Poznań, Zielona 12',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'id_transactions' => '8',
                    'cost' => '68.50',
                    'address' => 'Katowice, Kwiatowa 9',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '9',
                    'cost' => '95.20',
                    'address' => 'Szczecin, Rybacka 7',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '10',
                    'cost' => '22.80',
                    'address' => 'Gdynia, Portowa 11',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'id_transactions' => '11',
                    'cost' => '37.60',
                    'address' => 'Bydgoszcz, Wiosenna 6',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '12',
                    'cost' => '81.10',
                    'address' => 'Lublin, Lipowa 14',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '13',
                    'cost' => '12.50',
                    'address' => 'Białystok, Polna 17',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '14',
                    'cost' => '50.70',
                    'address' => 'Olsztyn, Leśna 19',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'id_transactions' => '15',
                    'cost' => '45.90',
                    'address' => 'Kielce, Kwiatowa 22',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '16',
                    'cost' => '63.20',
                    'address' => 'Rzeszów, Kopisto 21',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '17',
                    'cost' => '28.10',
                    'address' => 'Warszawa, Północna 10',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '18',
                    'cost' => '37.80',
                    'address' => 'Kraków, Kwiatowa 5',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'id_transactions' => '19',
                    'cost' => '19.50',
                    'address' => 'Gdańsk, Morska 15',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '20',
                    'cost' => '76.30',
                    'address' => 'Wrocław, Słoneczna 8',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '21',
                    'cost' => '42.90',
                    'address' => 'Łódź, Podwodna 3',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '22',
                    'cost' => '14.20',
                    'address' => 'Poznań, Zielona 12',
                    'order_status' => 'Opłacono'
                ],
                [
                    'id_transactions' => '23',
                    'cost' => '51.80',
                    'address' => 'Katowice, Kwiatowa 9',
                    'order_status' => 'Oczekiwanie na zapłatę'
                ],
                [
                    'id_transactions' => '24',
                    'cost' => '32.50',
                    'address' => 'Szczecin, Rybacka 7',
                    'order_status' => 'Zakończone'
                ],
                [
                    'id_transactions' => '25',
                    'cost' => '48.60',
                    'address' => 'Gdynia, Portowa 11',
                    'order_status' => 'Opłacono'
                ],
            ]
        );
    }
}
