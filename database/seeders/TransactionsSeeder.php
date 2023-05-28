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
                    'weight' => '500',
                    'date' => '2023-05-21'
                ],
                [
                    'id_users' => '2',
                    'id_sweets' => '3',
                    'weight' => '780',
                    'date' => '2022-12-10'
                ],
                [
                    'id_users' => '3',
                    'id_sweets' => '5',
                    'weight' => '350',
                    'date' => '2023-01-15'
                ],
                [
                    'id_users' => '4',
                    'id_sweets' => '8',
                    'weight' => '511',
                    'date' => '2023-03-05'
                ],
                [
                    'id_users' => '5',
                    'id_sweets' => '10',
                    'weight' => '20',
                    'date' => '2023-02-01'
                ],
                [
                    'id_users' => '6',
                    'id_sweets' => '12',
                    'weight' => '199',
                    'date' => '2022-11-25'
                ],
                [
                    'id_users' => '7',
                    'id_sweets' => '14',
                    'weight' => '680',
                    'date' => '2023-04-18'
                ],
                [
                    'id_users' => '8',
                    'id_sweets' => '17',
                    'weight' => '560',
                    'date' => '2023-05-10'
                ],
                [
                    'id_users' => '9',
                    'id_sweets' => '20',
                    'weight' => '500',
                    'date' => '2022-12-01'
                ],
                [
                    'id_users' => '10',
                    'id_sweets' => '23',
                    'weight' => '456',
                    'date' => '2023-01-20'
                ],
                [
                    'id_users' => '11',
                    'id_sweets' => '26',
                    'weight' => '2005',
                    'date' => '2023-02-15'
                ],
                [
                    'id_users' => '12',
                    'id_sweets' => '29',
                    'weight' => '1630',
                    'date' => '2022-11-12'
                ],
                [
                    'id_users' => '13',
                    'id_sweets' => '32',
                    'weight' => '987',
                    'date' => '2023-04-05'
                ],
                [
                    'id_users' => '14',
                    'id_sweets' => '35',
                    'weight' => '123',
                    'date' => '2023-03-15'
                ],
                [
                    'id_users' => '15',
                    'id_sweets' => '38',
                    'weight' => '743',
                    'date' => '2023-05-15'
                ],
                [
                    'id_users' => '1',
                    'id_sweets' => '41',
                    'weight' => '265',
                    'date' => '2023-04-25'
                ],
                [
                    'id_users' => '2',
                    'id_sweets' => '44',
                    'weight' => '864',
                    'date' => '2023-03-10'
                ],
                [
                    'id_users' => '3',
                    'id_sweets' => '47',
                    'weight' => '189',
                    'date' => '2023-01-05'
                ],
                [
                    'id_users' => '4',
                    'id_sweets' => '50',
                    'weight' => '500',
                    'date' => '2022-12-20'
                ],
                [
                    'id_users' => '5',
                    'id_sweets' => '2',
                    'weight' => '523',
                    'date' => '2023-02-05'
                ],
                [
                    'id_users' => '6',
                    'id_sweets' => '4',
                    'weight' => '354',
                    'date' => '2022-11-30'
                ],
                [
                    'id_users' => '7',
                    'id_sweets' => '6',
                    'weight' => '576',
                    'date' => '2023-04-08'
                ],
                [
                    'id_users' => '8',
                    'id_sweets' => '9',
                    'weight' => '123',
                    'date' => '2023-05-05'
                ],
                [
                    'id_users' => '9',
                    'id_sweets' => '11',
                    'weight' => '500',
                    'date' => '2023-01-30'
                ],
                [
                    'id_users' => '10',
                    'id_sweets' => '13',
                    'weight' => '532',
                    'date' => '2022-12-15'
                ],
                [
                    'id_users' => '11',
                    'id_sweets' => '16',
                    'weight' => '467',
                    'date' => '2023-02-10'
                ],
                [
                    'id_users' => '12',
                    'id_sweets' => '19',
                    'weight' => '1200',
                    'date' => '2022-11-20'
                ],
                [
                    'id_users' => '13',
                    'id_sweets' => '22',
                    'weight' => '525',
                    'date' => '2023-04-01'
                ],
                [
                    'id_users' => '14',
                    'id_sweets' => '25',
                    'weight' => '505',
                    'date' => '2023-03-20'
                ],
                [
                    'id_users' => '15',
                    'id_sweets' => '28',
                    'weight' => '125',
                    'date' => '2023-05-05'
                ],
                [
                    'id_users' => '1',
                    'id_sweets' => '28',
                    'weight' => '250',
                    'date' => '2023-05-21'
                ],
            ]
        );
    }
}
