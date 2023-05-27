<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Transactions;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Transactions::truncate();
        });

        Transactions::insert(
            [
                [
                    'id_users' => '1',
                    'id_sweets' => '1',
                    'date' => '2023-05-21'
                ],
                [
                    'id_users' => '2',
                    'id_sweets' => '3',
                    'date' => '2022-12-10'
                ],
                [
                    'id_users' => '3',
                    'id_sweets' => '5',
                    'date' => '2023-01-15'
                ],
                [
                    'id_users' => '4',
                    'id_sweets' => '8',
                    'date' => '2023-03-05'
                ],
                [
                    'id_users' => '5',
                    'id_sweets' => '10',
                    'date' => '2023-02-01'
                ],
                [
                    'id_users' => '6',
                    'id_sweets' => '12',
                    'date' => '2022-11-25'
                ],
                [
                    'id_users' => '7',
                    'id_sweets' => '14',
                    'date' => '2023-04-18'
                ],
                [
                    'id_users' => '8',
                    'id_sweets' => '17',
                    'date' => '2023-05-10'
                ],
                [
                    'id_users' => '9',
                    'id_sweets' => '20',
                    'date' => '2022-12-01'
                ],
                [
                    'id_users' => '10',
                    'id_sweets' => '23',
                    'date' => '2023-01-20'
                ],
                [
                    'id_users' => '11',
                    'id_sweets' => '26',
                    'date' => '2023-02-15'
                ],
                [
                    'id_users' => '12',
                    'id_sweets' => '29',
                    'date' => '2022-11-12'
                ],
                [
                    'id_users' => '13',
                    'id_sweets' => '32',
                    'date' => '2023-04-05'
                ],
                [
                    'id_users' => '14',
                    'id_sweets' => '35',
                    'date' => '2023-03-15'
                ],
                [
                    'id_users' => '15',
                    'id_sweets' => '38',
                    'date' => '2023-05-15'
                ],
                [
                    'id_users' => '1',
                    'id_sweets' => '41',
                    'date' => '2023-04-25'
                ],
                [
                    'id_users' => '2',
                    'id_sweets' => '44',
                    'date' => '2023-03-10'
                ],
                [
                    'id_users' => '3',
                    'id_sweets' => '47',
                    'date' => '2023-01-05'
                ],
                [
                    'id_users' => '4',
                    'id_sweets' => '50',
                    'date' => '2022-12-20'
                ],
                [
                    'id_users' => '5',
                    'id_sweets' => '2',
                    'date' => '2023-02-05'
                ],
                [
                    'id_users' => '6',
                    'id_sweets' => '4',
                    'date' => '2022-11-30'
                ],
                [
                    'id_users' => '7',
                    'id_sweets' => '6',
                    'date' => '2023-04-08'
                ],
                [
                    'id_users' => '8',
                    'id_sweets' => '9',
                    'date' => '2023-05-05'
                ],
                [
                    'id_users' => '9',
                    'id_sweets' => '11',
                    'date' => '2023-01-30'
                ],
                [
                    'id_users' => '10',
                    'id_sweets' => '13',
                    'date' => '2022-12-15'
                ],
                [
                    'id_users' => '11',
                    'id_sweets' => '16',
                    'date' => '2023-02-10'
                ],
                [
                    'id_users' => '12',
                    'id_sweets' => '19',
                    'date' => '2022-11-20'
                ],
                [
                    'id_users' => '13',
                    'id_sweets' => '22',
                    'date' => '2023-04-01'
                ],
                [
                    'id_users' => '14',
                    'id_sweets' => '25',
                    'date' => '2023-03-20'
                ],
                [
                    'id_users' => '15',
                    'id_sweets' => '28',
                    'date' => '2023-05-05'
                ],
                [
                    'id_users' => '1',
                    'id_sweets' => '28',
                    'date' => '2023-05-21'
                ],
            ]
        );
    }
}
