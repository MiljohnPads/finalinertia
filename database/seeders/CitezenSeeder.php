<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Citezen;

class CitezenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hardcoded data for Citezen model
        $citezensData = [
            [
                'name' => 'Emilio Aguinaldo',
                'age' => 30,
                'sex' => 'Male',
                'description' => 'Aguinaldo was the leader of the Philippine Revolution against Spanish colonial rule and the first President of the Philippines.'
            ],
            [
                'name' => 'Manuel L. Quezon',
                'age' => 65,
                'sex' => 'Male',
                'description' => 'Quezon served as the first President of the Philippine Commonwealth under American rule.'
            ],
            [
                'name' => 'José P. Laurel',
                'age' => 51,
                'sex' => 'Male',
                'description' => 'Laurel was appointed as President by the Japanese during their occupation of the Philippines in World War II.'
            ],
            [
                'name' => 'Sergio Osmeña',
                'age' => 65,
                'sex' => 'Male',
                'description' => 'Osmeña succeeded Quezon as President of the Commonwealth when Quezon died in exile during World War II.'
            ],
            [
                'name' => 'Manuel Roxas',
                'age' => 56,
                'sex' => 'Male',
                'description' => 'Roxas became the first President of the independent Republic of the Philippines after World War II.'
            ],
            [
                'name' => 'Elpidio Quirino',
                'age' => 57,
                'sex' => 'Male',
                'description' => 'Quirino succeeded Roxas and served as the sixth President of the Philippines.'
            ],
            [
                'name' => 'Ramón Magsaysay',
                'age' => 49,
                'sex' => 'Male',
                'description' => 'Magsaysay was known for his integrity and his efforts to fight corruption and improve the lives of the Filipino people.'
            ],
            [
                'name' => 'Carlos P. Garcia',
                'age' => 61,
                'sex' => 'Male',
                'description' => 'Garcia succeeded Magsaysay and served as the eighth President of the Philippines.'
            ],
            [
                'name' => 'Diosdado Macapagal',
                'age' => 65,
                'sex' => 'Male',
                'description' => 'Macapagal, father of former President Gloria Macapagal-Arroyo, was known for his advocacy of land reform and social justice.'
            ],
            [
                'name' => 'Ferdinand Marcos',
                'age' => 48,
                'sex' => 'Male',
                'description' => 'Marcos is known for declaring martial law in 1972, which led to a period of authoritarian rule in the Philippines.'
            ],
            [
                'name' => 'Corazon Aquino',
                'age' => 53,
                'sex' => 'Female',
                'description' => 'Aquino became the first female President of the Philippines and is known for leading the People Power Revolution, which ousted Marcos from power.'
            ],
            [
                'name' => 'Fidel V. Ramos',
                'age' => 64,
                'sex' => 'Male',
                'description' => 'Ramos served as the 12th President of the Philippines and focused on economic reforms and infrastructure development.'
            ],
            [
                'name' => 'Joseph Estrada',
                'age' => 61,
                'sex' => 'Male',
                'description' => 'Estrada, a popular actor before entering politics, was ousted from power in 2001 amid allegations of corruption.'
            ],
            [
                'name' => 'Gloria Macapagal-Arroyo',
                'age' => 54,
                'sex' => 'Female',
                'description' => 'Arroyo served as President from 2001 to 2010 and later as Speaker of the House of Representatives.'
            ],
            [
                'name' => 'Benigno Aquino III',
                'age' => 50,
                'sex' => 'Male',
                'description' => 'Aquino, the son of Corazon Aquino, focused on fighting corruption and improving governance during his presidency.'
            ],
            [
                'name' => 'Rodrigo Duterte',
                'age' => 71,
                'sex' => 'Male',
                'description' => 'Duterte, known for his controversial policies and strong stance on crime and drugs, has been serving as the President of the Philippines since 2016.'
            ],
        ];

        // Insert hardcoded data into database
        foreach ($citezensData as $citezenData) {
            Citezen::create($citezenData);
        }
    }
}
