<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Users::truncate();
        });

        Users::insert(
            [
                [
                    'name' => 'Jan',
                    'surname' => 'Kowal',
                    'email' => 'jankowal@email.eu',
                    'password' => Hash::make('jankowal123'),
                    'phone' => '987654321',
                    'address' => 'Rzeszów, Kopisto 21',
                    'role_id' => 1
                ],
                [
                    'name' => 'Anna',
                    'surname' => 'Nowak',
                    'email' => 'annanowak@email.eu',
                    'password' => Hash::make('annanowak123'),
                    'phone' => '123456789',
                    'address' => 'Warszawa, Północna 10',
                    'role_id' => 2
                ],
                [
                    'name' => 'Piotr',
                    'surname' => 'Wiśniewski',
                    'email' => 'piotrwisniewski@email.eu',
                    'password' => Hash::make('piotrwisniewski123'),
                    'phone' => '456789123',
                    'address' => 'Kraków, Kwiatowa 5',
                    'role_id' => 2
                ],
                [
                    'name' => 'Magda',
                    'surname' => 'Kowalska',
                    'email' => 'magdakowalska@email.eu',
                    'password' => Hash::make('magdakowalska123'),
                    'phone' => '789123456',
                    'address' => 'Gdańsk, Morska 15',
                    'role_id' => 2
                ],
                [
                    'name' => 'Krzysztof',
                    'surname' => 'Jankowski',
                    'email' => 'krzysztofjankowski@email.eu',
                    'password' => Hash::make('krzysztofjankowski123'),
                    'phone' => '234567891',
                    'address' => 'Wrocław, Słoneczna 8',
                    'role_id' => 1
                ],
                [
                    'name' => 'Alicja',
                    'surname' => 'Kaczmarek',
                    'email' => 'alicjakaczmarek@email.eu',
                    'password' => Hash::make('alicjakaczmarek123'),
                    'phone' => '567891234',
                    'address' => 'Łódź, Podwodna 3',
                    'role_id' => 2
                ],
                [
                    'name' => 'Marcin',
                    'surname' => 'Lewandowski',
                    'email' => 'marcinlewandowski@email.eu',
                    'password' => Hash::make('marcinlewandowski123'),
                    'phone' => '891234567',
                    'address' => 'Poznań, Zielona 12',
                    'role_id' => 2
                ],
                [
                    'name' => 'Natalia',
                    'surname' => 'Wójcik',
                    'email' => 'nataliawojcik@email.eu',
                    'password' => Hash::make('nataliawojcik123'),
                    'phone' => '432187654',
                    'address' => 'Katowice, Kwiatowa 9',
                    'role_id' => 2
                ],
                [
                    'name' => 'Tomasz',
                    'surname' => 'Dąbrowski',
                    'email' => 'tomaszdabrowski@email.eu',
                    'password' => Hash::make('tomaszdabrowski123'),
                    'phone' => '876543219',
                    'address' => 'Szczecin, Rybacka 7',
                    'role_id' => 2
                ],
                [
                    'name' => 'Monika',
                    'surname' => 'Zielińska',
                    'email' => 'monikazielinska@email.eu',
                    'password' => Hash::make('monikazielinska123'),
                    'phone' => '321987654',
                    'address' => 'Gdynia, Portowa 11',
                    'role_id' => 2
                ],
                [
                    'name' => 'Adam',
                    'surname' => 'Sikora',
                    'email' => 'adamsikora@email.eu',
                    'password' => Hash::make('adamsikora123'),
                    'phone' => '654321987',
                    'address' => 'Bydgoszcz, Wiosenna 6',
                    'role_id' => 2
                ],
                [
                    'name' => 'Karolina',
                    'surname' => 'Adamczyk',
                    'email' => 'karolinaadamczyk@email.eu',
                    'password' => Hash::make('karolinaadamczyk123'),
                    'phone' => '987321654',
                    'address' => 'Lublin, Lipowa 14',
                    'role_id' => 2
                ],
                [
                    'name' => 'Michał',
                    'surname' => 'Kwiatkowski',
                    'email' => 'michalkwiatkowski@email.eu',
                    'password' => Hash::make('michalkwiatkowski123'),
                    'phone' => '216549873',
                    'address' => 'Białystok, Polna 17',
                    'role_id' => 2
                ],
                [
                    'name' => 'Marta',
                    'surname' => 'Piotrowska',
                    'email' => 'martapiotrowska@email.eu',
                    'password' => Hash::make('martapiotrowska123'),
                    'phone' => '873216549',
                    'address' => 'Olsztyn, Leśna 19',
                    'role_id' => 2
                ],
                [
                    'name' => 'Wojciech',
                    'surname' => 'Kozłowski',
                    'email' => 'wojciechkozlowski@email.eu',
                    'password' => Hash::make('wojciechkozlowski123'),
                    'phone' => '549873216',
                    'address' => 'Kielce, Kwiatowa 22',
                    'role_id' => 2
                ],
            ]
        );
    }
}
