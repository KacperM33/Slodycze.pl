<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class OrderTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            ['order_id' => 1, 'transaction_id' => 1],

            ['order_id' => 2, 'transaction_id' => 2],

            ['order_id' => 3, 'transaction_id' => 3],

            ['order_id' => 4, 'transaction_id' => 4],

            ['order_id' => 5, 'transaction_id' => 5],

            ['order_id' => 6, 'transaction_id' => 6],

            ['order_id' => 7, 'transaction_id' => 7],

            ['order_id' => 8, 'transaction_id' => 8],

            ['order_id' => 9, 'transaction_id' => 9],

            ['order_id' => 10, 'transaction_id' => 10],

            ['order_id' => 11, 'transaction_id' => 11],

            ['order_id' => 12, 'transaction_id' => 12],

            ['order_id' => 13, 'transaction_id' => 13],

            ['order_id' => 14, 'transaction_id' => 14],

            ['order_id' => 15, 'transaction_id' => 15],

            ['order_id' => 1, 'transaction_id' => 16],

            ['order_id' => 2, 'transaction_id' => 17],

            ['order_id' => 3, 'transaction_id' => 18],

            ['order_id' => 4, 'transaction_id' => 19],

            ['order_id' => 5, 'transaction_id' => 20],

            ['order_id' => 6, 'transaction_id' => 21],

            ['order_id' => 7, 'transaction_id' => 22],

            ['order_id' => 8, 'transaction_id' => 23],

            ['order_id' => 9, 'transaction_id' => 24],

            ['order_id' => 10, 'transaction_id' => 25],

            ['order_id' => 11, 'transaction_id' => 26],

            ['order_id' => 12, 'transaction_id' => 27],

            ['order_id' => 13, 'transaction_id' => 28],

            ['order_id' => 14, 'transaction_id' => 29],

            ['order_id' => 15, 'transaction_id' => 30],

            ['order_id' => 1, 'transaction_id' => 31],
        ];

        DB::table('order_transaction')->insert($transactions);
    }
}
