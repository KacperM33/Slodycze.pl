<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Users;

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
                    'mail' => 'jankowal@email.eu',
                    'password' => 'jankowal123',
                    'phone' => '987654321',
                    'address' => 'Rzeszów, Kopisto 21'
                ],
                [
                    'name' => 'Anna',
                    'surname' => 'Nowak',
                    'mail' => 'annanowak@email.eu',
                    'password' => 'annanowak123',
                    'phone' => '123456789',
                    'address' => 'Warszawa, Północna 10'
                ],
                [
                    'name' => 'Piotr',
                    'surname' => 'Wiśniewski',
                    'mail' => 'piotrwisniewski@email.eu',
                    'password' => 'piotrwisniewski123',
                    'phone' => '456789123',
                    'address' => 'Kraków, Kwiatowa 5'
                ],
                [
                    'name' => 'Magda',
                    'surname' => 'Kowalska',
                    'mail' => 'magdakowalska@email.eu',
                    'password' => 'magdakowalska123',
                    'phone' => '789123456',
                    'address' => 'Gdańsk, Morska 15'
                ],
                [
                    'name' => 'Krzysztof',
                    'surname' => 'Jankowski',
                    'mail' => 'krzysztofjankowski@email.eu',
                    'password' => 'krzysztofjankowski123',
                    'phone' => '234567891',
                    'address' => 'Wrocław, Słoneczna 8'
                ],
                [
                    'name' => 'Alicja',
                    'surname' => 'Kaczmarek',
                    'mail' => 'alicjakaczmarek@email.eu',
                    'password' => 'alicjakaczmarek123',
                    'phone' => '567891234',
                    'address' => 'Łódź, Podwodna 3'
                ],
                [
                    'name' => 'Marcin',
                    'surname' => 'Lewandowski',
                    'mail' => 'marcinlewandowski@email.eu',
                    'password' => 'marcinlewandowski123',
                    'phone' => '891234567',
                    'address' => 'Poznań, Zielona 12'
                ],
                [
                    'name' => 'Natalia',
                    'surname' => 'Wójcik',
                    'mail' => 'nataliawojcik@email.eu',
                    'password' => 'nataliawojcik123',
                    'phone' => '432187654',
                    'address' => 'Katowice, Kwiatowa 9'
                ],
                [
                    'name' => 'Tomasz',
                    'surname' => 'Dąbrowski',
                    'mail' => 'tomaszdabrowski@email.eu',
                    'password' => 'tomaszdabrowski123',
                    'phone' => '876543219',
                    'address' => 'Szczecin, Rybacka 7'
                ],
                [
                    'name' => 'Monika',
                    'surname' => 'Zielińska',
                    'mail' => 'monikazielinska@email.eu',
                    'password' => 'monikazielinska123',
                    'phone' => '321987654',
                    'address' => 'Gdynia, Portowa 11'
                ],
                [
                    'name' => 'Adam',
                    'surname' => 'Sikora',
                    'mail' => 'adamsikora@email.eu',
                    'password' => 'adamsikora123',
                    'phone' => '654321987',
                    'address' => 'Bydgoszcz, Wiosenna 6'
                ],
                [
                    'name' => 'Karolina',
                    'surname' => 'Adamczyk',
                    'mail' => 'karolinaadamczyk@email.eu',
                    'password' => 'karolinaadamczyk123',
                    'phone' => '987321654',
                    'address' => 'Lublin, Lipowa 14'
                ],
                [
                    'name' => 'Michał',
                    'surname' => 'Kwiatkowski',
                    'mail' => 'michalkwiatkowski@email.eu',
                    'password' => 'michalkwiatkowski123',
                    'phone' => '216549873',
                    'address' => 'Białystok, Polna 17'
                ],
                [
                    'name' => 'Marta',
                    'surname' => 'Piotrowska',
                    'mail' => 'martapiotrowska@email.eu',
                    'password' => 'martapiotrowska123',
                    'phone' => '873216549',
                    'address' => 'Olsztyn, Leśna 19'
                ],
                [
                    'name' => 'Wojciech',
                    'surname' => 'Kozłowski',
                    'mail' => 'wojciechkozlowski@email.eu',
                    'password' => 'wojciechkozlowski123',
                    'phone' => '549873216',
                    'address' => 'Kielce, Kwiatowa 22'
                ],
            ]
        );
    }
}
