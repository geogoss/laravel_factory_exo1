<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            [
                'name' => 'Biologie',
                'description' => 'Formation inutile pour jeunes qui aiment les animaux'
            ],
            [
                'name' => 'Mathematique',
                'description' => 'Formation pour les très intelligents'
            ],
            [
                'name' => 'Chimie',
                'description' => 'Formation pour faire des explosions .... de saveurs aussi'
            ],
            [
                'name' => 'Physiques',
                'description' => 'Formation pour faire des explosions .... de saveurs aussi'
            ],
            [
                'name' => 'Géologie',
                'description' => 'Formation pour trouver des fossiles'
            ],
        ]);

    }
}
