<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'France',
                'capital' => 'Paris',
                'population' => 67000000,
                'region' => 'Europe',
                'currency' => 'Euro',
                'language' => 'Français',
            ],
            [
                'name' => 'Japon',
                'capital' => 'Tokyo',
                'population' => 126000000,
                'region' => 'Asie',
                'currency' => 'Yen',
                'language' => 'Japonais',
            ],
            [
                'name' => 'Brésil',
                'capital' => 'Brasília',
                'population' => 212000000,
                'region' => 'Amérique du Sud',
                'currency' => 'Real',
                'language' => 'Portugais',
            ],
            [
                'name' => 'Allemagne',
                'capital' => 'Berlin',
                'population' => 83000000,
                'region' => 'Europe',
                'currency' => 'Euro',
                'language' => 'Allemand',
            ],
            [
                'name' => 'Italie',
                'capital' => 'Rome',
                'population' => 60000000,
                'region' => 'Europe',
                'currency' => 'Euro',
                'language' => 'Italien',
            ],
            [
                'name' => 'Espagne',
                'capital' => 'Madrid',
                'population' => 47000000,
                'region' => 'Europe',
                'currency' => 'Euro',
                'language' => 'Espagnol',
            ],
            [
                'name' => 'États-Unis',
                'capital' => 'Washington, D.C.',
                'population' => 331000000,
                'region' => 'Amérique du Nord',
                'currency' => 'Dollar',
                'language' => 'Anglais',
            ],
            [
                'name' => 'Chine',
                'capital' => 'Pékin',
                'population' => 1400000000,
                'region' => 'Asie',
                'currency' => 'Yuan',
                'language' => 'Chinois',
            ],
            [
                'name' => 'Inde',
                'capital' => 'New Delhi',
                'population' => 1380000000,
                'region' => 'Asie',
                'currency' => 'Roupie',
                'language' => 'Hindi, Anglais',
            ],
            [
                'name' => 'Canada',
                'capital' => 'Ottawa',
                'population' => 38000000,
                'region' => 'Amérique du Nord',
                'currency' => 'Dollar canadien',
                'language' => 'Anglais, Français',
            ],
            [
                'name' => 'Mexique',
                'capital' => 'Mexico',
                'population' => 126000000,
                'region' => 'Amérique du Nord',
                'currency' => 'Peso',
                'language' => 'Espagnol',
            ],
            [
                'name' => 'Australie',
                'capital' => 'Canberra',
                'population' => 26000000,
                'region' => 'Océanie',
                'currency' => 'Dollar australien',
                'language' => 'Anglais',
            ],
            [
                'name' => 'Argentine',
                'capital' => 'Buenos Aires',
                'population' => 45000000,
                'region' => 'Amérique du Sud',
                'currency' => 'Peso',
                'language' => 'Espagnol',
            ],
            [
                'name' => 'Russie',
                'capital' => 'Moscou',
                'population' => 146000000,
                'region' => 'Europe/Asie',
                'currency' => 'Rouble',
                'language' => 'Russe',
            ],
            [
                'name' => 'Afrique du Sud',
                'capital' => 'Pretoria',
                'population' => 60000000,
                'region' => 'Afrique',
                'currency' => 'Rand',
                'language' => 'Afrikaans, Anglais',
            ],
            [
                'name' => 'Égypte',
                'capital' => 'Le Caire',
                'population' => 95000000,
                'region' => 'Afrique',
                'currency' => 'Livre égyptienne',
                'language' => 'Arabe',
            ],
            [
                'name' => 'Nigeria',
                'capital' => 'Abuja',
                'population' => 200000000,
                'region' => 'Afrique',
                'currency' => 'Naira',
                'language' => 'Anglais',
            ],
            [
                'name' => 'Turquie',
                'capital' => 'Ankara',
                'population' => 82000000,
                'region' => 'Asie',
                'currency' => 'Livre turque',
                'language' => 'Turc',
            ],
            [
                'name' => 'Indonésie',
                'capital' => 'Jakarta',
                'population' => 270000000,
                'region' => 'Asie',
                'currency' => 'Rupiah',
                'language' => 'Indonésien',
            ],
            [
                'name' => 'Royaume-Uni',
                'capital' => 'Londres',
                'population' => 67000000,
                'region' => 'Europe',
                'currency' => 'Livre sterling',
                'language' => 'Anglais',
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
