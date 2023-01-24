<?php

namespace Database\Seeders;

use App\Models\Teche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Html','Css','Javascript','Vue','Php','Laravel'];

        foreach($data as $item){
            $newTechnology = new Teche();
            $newTechnology->name = $item;
            $newTechnology->slug = Str::slug($item);
            $newTechnology->save();
        }
    }
}
