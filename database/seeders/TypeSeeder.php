<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([

            [
                'name' => 'Biologie marine',
            ],
            [
                'name' => 'Génétique',
            ],
            [
                'name' => 'Biologie cellulaire',
            ],
            [
                'name' => 'Biologie moléculaire',
            ],
            [
                'name' => 'Statistique',
            ],
            [
                'name' => 'Chimie organique',
            ],
            [
                'name' => 'Physique quantique',
            ],
            [
                'name' => 'Physique nucléaire',
            ],
            [
                'name' => 'Physique des particules',
            ],
            [
                'name' => 'Géologie',
            ],
            [
                'name' => 'Archéologie',
            ]


        ]);
    }
}
