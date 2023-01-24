<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Teche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTechesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 100; $i++){

            $project = Project::inRandomOrder()->first();

            $teche_id = Teche::inRandomOrder()->first()->id;

            $project->tech()->attach($teche_id);

        }
    }
}
