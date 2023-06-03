<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Sweets;

class SweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Sweets::truncate();
        });

        Sweets::insert(
            [
                [
                    'name' => 'Cooksy', 'category' => 'Cukierki', 'type' => 'Landrynki',
                    'price' => '1.99', 'quantity' => '50.00', 'describe' => 'Owocowe cukierki landrynki z owocowym nadzieniem wewnątrz.',
                    'exp-date' => '2025-05-12'
                ],
                [
                    'name' => 'ChocoBurst', 'category' => 'Czekolada', 'type' => 'Mleczna',
                    'price' => '2.49', 'quantity' => '30.00', 'describe' => 'Delikatna mleczna czekolada z płynnym karmelem w środku.',
                    'exp-date' => '2023-12-31'
                ],
                [
                    'name' => 'Fruitylicious', 'category' => 'Żelki', 'type' => 'Owocowe',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Kolorowe owocowe żelki w różnych smakach: truskawka, pomarańcza, malina.',
                    'exp-date' => '2024-06-15'
                ],
                [
                    'name' => 'Rainbow Drops', 'category' => 'Cukierki', 'type' => 'Kwasowe',
                    'price' => '1.29', 'quantity' => '60.00', 'describe' => 'Kwasowe cukierki w tęczowych kolorach: żółty, różowy, niebieski, zielony.',
                    'exp-date' => '2023-09-30'
                ],
                [
                    'name' => 'Caramel Swirl', 'category' => 'Czekolada', 'type' => 'Biała',
                    'price' => '2.99', 'quantity' => '25.00', 'describe' => 'Kremowa biała czekolada z wirującym karmelem wewnątrz.',
                    'exp-date' => '2024-08-20'
                ],
                [
                    'name' => 'Berry Burst', 'category' => 'Żelki', 'type' => 'Malinowe',
                    'price' => '1.49', 'quantity' => '35.00', 'describe' => 'Intensywnie malinowe żelki o słodkim smaku z owocowym nadzieniem.',
                    'exp-date' => '2023-11-05'
                ],
                [
                    'name' => 'Peppermint Twist', 'category' => 'Cukierki', 'type' => 'Miętowe',
                    'price' => '1.79', 'quantity' => '50.00', 'describe' => 'Odrobina świeżej mięty w każdym cukierku, idealne na odświeżenie.',
                    'exp-date' => '2023-10-15'
                ],
                [
                    'name' => 'Dark Delight', 'category' => 'Czekolada', 'type' => 'Gorzka',
                    'price' => '2.79', 'quantity' => '20.00', 'describe' => 'Intensywna gorzka czekolada o wysokim zawartości kakao.',
                    'exp-date' => '2025-03-01'
                ],
                [
                    'name' => 'Juicy Gummy', 'category' => 'Żelki', 'type' => 'Cytrynowe',
                    'price' => '1.59', 'quantity' => '45.00', 'describe' => 'Kwaśne cytrynowe żelki, które rozpływają się w ustach.',
                    'exp-date' => '2024-04-10'
                ],
                [
                    'name' => 'Honey Crunch', 'category' => 'Czekolada', 'type' => 'Miodowa',
                    'price' => '2.49', 'quantity' => '30.00', 'describe' => 'Czekolada o delikatnym smaku miodu, z chrupiącymi kawałkami orzechów.',
                    'exp-date' => '2024-07-05'
                ],
                [
                    'name' => 'Fizzy Fizz', 'category' => 'Cukierki', 'type' => 'Musujące',
                    'price' => '1.29', 'quantity' => '55.00', 'describe' => 'Musujące cukierki o różnych smakach i pikantnym efekcie w ustach w kształcie małych rybek.',
                    'exp-date' => '2023-12-15'
                ],
                [
                    'name' => 'Tropical Paradise', 'category' => 'Żelki', 'type' => 'Tropikalne',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Żelki o smaku tropikalnych owoców: mango, ananas, marakuja.',
                    'exp-date' => '2024-09-20'
                ],
                [
                    'name' => 'Mint Chocolate Crunch', 'category' => 'Czekolada', 'type' => 'Miętowa',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Czekolada o smaku mięty z chrupiącymi kawałkami czekolady.',
                    'exp-date' => '2024-03-31'
                ],
                [
                    'name' => 'Fruitlicious Bites', 'category' => 'Cukierki', 'type' => 'Owocowe',
                    'price' => '1.49', 'quantity' => '35.00', 'describe' => 'Kolorowe owocowe cukierki w formie małych kuleczek.',
                    'exp-date' => '2023-11-10'
                ],
                [
                    'name' => 'Caramel Dream', 'category' => 'Czekolada', 'type' => 'Karmelowa',
                    'price' => '2.99', 'quantity' => '20.00', 'describe' => 'Czekolada o intensywnym smaku karmelu, która rozpływa się w ustach.',
                    'exp-date' => '2024-07-15'
                ],
                [
                    'name' => 'Cherry Bombs', 'category' => 'Żelki', 'type' => 'Wiśniowe',
                    'price' => '1.59', 'quantity' => '45.00', 'describe' => 'Intensywnie wiśniowe żelki o słodko-kwaśnym smaku.',
                    'exp-date' => '2023-10-01'
                ],
                [
                    'name' => 'Butter Toffee', 'category' => 'Czekolada', 'type' => 'Krówka',
                    'price' => '2.49', 'quantity' => '30.00', 'describe' => 'Delikatna czekolada o smaku toffi z masłem, która rozpływa się w ustach.',
                    'exp-date' => '2024-04-05'
                ],
                [
                    'name' => 'Berry Blast', 'category' => 'Cukierki', 'type' => 'Owocowe',
                    'price' => '1.29', 'quantity' => '60.00', 'describe' => 'Cukierki o intensywnym smaku mieszanki owoców jagodowych.',
                    'exp-date' => '2023-09-15'
                ],
                [
                    'name' => 'Orange Zest', 'category' => 'Czekolada', 'type' => 'Pomarańczowa',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Czekolada o intensywnym smaku pomarańczy z dodatkiem skórki pomarańczowej.',
                    'exp-date' => '2024-02-28'
                ],
                [
                    'name' => 'Sour Poppers', 'category' => 'Żelki', 'type' => 'Kwasne',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Kwasne żelki w różnych smakach: jabłko, cytryna, malina.',
                    'exp-date' => '2024-09-10'
                ],
                [
                    'name' => 'Peanut Butter Cup', 'category' => 'Czekolada', 'type' => 'Orzechowa',
                    'price' => '2.99', 'quantity' => '20.00', 'describe' => 'Czekolada z masłem orzechowym w środku, idealna dla miłośników orzechów.',
                    'exp-date' => '2024-06-30'
                ],
                [
                    'name' => 'Tangy Twist Candy', 'category' => 'Cukierki', 'type' => 'Kwasowo-owocowe',
                    'price' => '1.59', 'quantity' => '45.00', 'describe' => 'Cukierki o kwasowo-owocowym smaku: cytryna, pomarańcza, truskawka.',
                    'exp-date' => '2023-11-15'
                ],
                [
                    'name' => 'Bubblegum Burst', 'category' => 'Żelki', 'type' => 'Gumowe',
                    'price' => '1.79', 'quantity' => '50.00', 'describe' => 'Żelki o smaku bubblegum, które można żuć jak gumę do żucia.',
                    'exp-date' => '2023-10-20'
                ],
                [
                    'name' => 'Hazelnut Delight', 'category' => 'Czekolada', 'type' => 'Orzechowa',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Czekolada o intensywnym smaku orzechów laskowych, idealna dla miłośników orzechów.',
                    'exp-date' => '2024-03-15'
                ],
                [
                    'name' => 'Cotton Candy Clouds', 'category' => 'Cukierki', 'type' => 'Wata cukrowa',
                    'price' => '1.49', 'quantity' => '35.00', 'describe' => 'Cukierki o smaku wata cukrowa, które przeniosą cię do krainy słodyczy.',
                    'exp-date' => '2023-10-31'
                ],
                [
                    'name' => 'Strawberry Fields', 'category' => 'Żelki', 'type' => 'Truskawkowe',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Żelki o intensywnym smaku truskawek, które roztapiają się w ustach.',
                    'exp-date' => '2024-08-10'
                ],
                [
                    'name' => 'Creamy Caramel', 'category' => 'Czekolada', 'type' => 'Karmelowa',
                    'price' => '2.99', 'quantity' => '20.00', 'describe' => 'Czekolada o kremowym smaku karmelu, która rozpływa się w ustach.',
                    'exp-date' => '2024-05-15'
                ],
                [
                    'name' => 'Watermelon Burst', 'category' => 'Cukierki', 'type' => 'Arbuzowe',
                    'price' => '1.29', 'quantity' => '60.00', 'describe' => 'Cukierki o intensywnym smaku arbuzowym, idealne na letnie dni.',
                    'exp-date' => '2023-09-01'
                ],
                [
                    'name' => 'Toffee Crunch', 'category' => 'Czekolada', 'type' => 'Krówka',
                    'price' => '2.49', 'quantity' => '30.00', 'describe' => 'Czekolada o delikatnym smaku toffi z chrupiącymi kawałkami orzechów.',
                    'exp-date' => '2024-04-15'
                ],
                [
                    'name' => 'Tangy Twist', 'category' => 'Żelki', 'type' => 'Kwasowe',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Kwasowe żelki o różnych smakach: malina, cytryna, grejpfrut.',
                    'exp-date' => '2024-09-30'
                ],
                [
                    'name' => 'Minty Chocolate Surprise', 'category' => 'Czekolada', 'type' => 'Miętowa',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Czekolada o smaku mięty z niespodzianką w środku.',
                    'exp-date' => '2024-03-05'
                ],
                [
                    'name' => 'Sour Worms', 'category' => 'Cukierki', 'type' => 'Kwasne',
                    'price' => '1.29', 'quantity' => '60.00', 'describe' => 'Kwasne cukierki w kształcie robaków, które są słodkie z zewnątrz, a kwasne w środku.',
                    'exp-date' => '2023-08-15'
                ],
                [
                    'name' => 'Creamy Hazelnut', 'category' => 'Czekolada', 'type' => 'Orzechowa',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Czekolada o kremowym smaku orzechów laskowych, która rozpływa się w ustach.',
                    'exp-date' => '2024-02-28'
                ],
                [
                    'name' => 'Gummy Cola Bottles', 'category' => 'Żelki', 'type' => 'Cola',
                    'price' => '1.59', 'quantity' => '45.00', 'describe' => 'Żelki o smaku coli w kształcie małych buteleczek.',
                    'exp-date' => '2023-10-15'
                ],
                [
                    'name' => 'Rocky Road', 'category' => 'Czekolada', 'type' => 'Karmelowa',
                    'price' => '2.99', 'quantity' => '20.00', 'describe' => 'Czekolada o smaku karmelu z kawałkami orzechów i piankami marshmallow.',
                    'exp-date' => '2024-06-15'
                ],
                [
                    'name' => 'Blueberry Burst', 'category' => 'Cukierki', 'type' => 'Borówkowe',
                    'price' => '1.49', 'quantity' => '35.00', 'describe' => 'Cukierki o intensywnym smaku borówkowym, które roztapiają się w ustach.',
                    'exp-date' => '2023-11-30'
                ],
                [
                    'name' => 'Cherry Kisses', 'category' => 'Żelki', 'type' => 'Wiśniowe',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Żelki o słodkim smaku wiśniowym, idealne do podzielenia się z bliskimi.',
                    'exp-date' => '2024-08-05'
                ],
                [
                    'name' => 'Cookies and Cream', 'category' => 'Czekolada', 'type' => 'Biała',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Biała czekolada z kawałkami ciastek, która przypomina smak ciastek z kremem.',
                    'exp-date' => '2024-02-28'
                ],
                [
                    'name' => 'Fruity Pebbles', 'category' => 'Cukierki', 'type' => 'Owocowe',
                    'price' => '1.29', 'quantity' => '60.00', 'describe' => 'Cukierki o smaku mieszanki owoców, które przypominają kolorowe kamyki.',
                    'exp-date' => '2023-09-15'
                ],
                [
                    'name' => 'Mocha Madness', 'category' => 'Czekolada', 'type' => 'Kawowa',
                    'price' => '2.49', 'quantity' => '30.00', 'describe' => 'Czekolada o intensywnym smaku kawy, idealna dla miłośników kofeiny.',
                    'exp-date' => '2024-04-15'
                ],
                [
                    'name' => 'Rainbow Sour Belts', 'category' => 'Żelki', 'type' => 'Kwasne',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Kwasne żelki w różnych kolorach tęczy, które zapewnią smakowitą eksplozję w ustach.',
                    'exp-date' => '2024-09-30'
                ],
                [
                    'name' => 'Peanut Brittle', 'category' => 'Czekolada', 'type' => 'Orzechowa',
                    'price' => '2.99', 'quantity' => '20.00', 'describe' => 'Czekolada z kawałkami kruchego orzeszku ziemnego, dla miłośników orzechów.',
                    'exp-date' => '2024-06-30'
                ],
                [
                    'name' => 'Sour Patch Kids', 'category' => 'Cukierki', 'type' => 'Kwasne',
                    'price' => '1.59', 'quantity' => '45.00', 'describe' => 'Kwasne cukierki w kształcie małych ludzików, które są słodkie z zewnątrz, a kwasne w środku.',
                    'exp-date' => '2023-11-15'
                ],
                [
                    'name' => 'Marshmallow Delight', 'category' => 'Żelki', 'type' => 'Piankowe',
                    'price' => '1.79', 'quantity' => '50.00', 'describe' => 'Miękkie żelki o smaku pianki marshmallow, które topią się w ustach.',
                    'exp-date' => '2023-10-20'
                ],
                [
                    'name' => 'Almond Joy', 'category' => 'Czekolada', 'type' => 'Migdałowa',
                    'price' => '2.79', 'quantity' => '25.00', 'describe' => 'Czekolada z migdałami i kokosem, która dostarcza radość i słodycz.',
                    'exp-date' => '2024-03-15'
                ],
                [
                    'name' => 'Cotton Candy Bites', 'category' => 'Cukierki', 'type' => 'Wata cukrowa',
                    'price' => '1.49', 'quantity' => '35.00', 'describe' => 'Małe cukierki o smaku wata cukrowa, które roztapiają się w ustach.',
                    'exp-date' => '2023-10-31'
                ],
                [
                    'name' => 'Raspberry Twist', 'category' => 'Żelki', 'type' => 'Malinowe',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Żelki o intensywnym smaku malinowym, które zachwycą każdego miłośnika owoców.',
                    'exp-date' => '2024-08-10'
                ],
                [
                    'name' => 'White Chocolate Dream', 'category' => 'Czekolada', 'type' => 'Biała',
                    'price' => '2.99', 'quantity' => '20.00', 'describe' => 'Biała czekolada o delikatnym smaku, która sprawia, że sen staje się słodkim.',
                    'exp-date' => '2024-05-15'
                ],
                [
                    'name' => 'Lemon Burst', 'category' => 'Cukierki', 'type' => 'Cytrynowe',
                    'price' => '1.29', 'quantity' => '60.00', 'describe' => 'Cukierki o intensywnym smaku cytrynowym, które dodadzą świeżości twojemu podniebieniu.',
                    'exp-date' => '2023-09-01'
                ],
                [
                    'name' => 'Mint Chocolate Chip', 'category' => 'Czekolada', 'type' => 'Miętowa',
                    'price' => '2.49', 'quantity' => '30.00', 'describe' => 'Czekolada o smaku mięty z kawałkami czekolady, idealna dla miłośników połączenia świeżości i słodyczy.',
                    'exp-date' => '2024-04-15'
                ],
                [
                    'name' => 'Gummy Bears', 'category' => 'Żelki', 'type' => 'Misie',
                    'price' => '1.99', 'quantity' => '40.00', 'describe' => 'Klasyczne żelki w kształcie misiów, które rozpływają się w ustach.',
                    'exp-date' => '2024-09-30'
                ],
            ]
        );
    }
}
