<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnes")->insert([
            [
                "nom"=>"Adil",
                "age"=>"28",
                "email"=>"Adil@hotmail.com",
                "telephone"=>"0458512532"
            ],
            [
                "nom"=>"Souli",
                "age"=>"27",
                "email"=>"Souli@hotmail.com",
                "telephone"=>"04565464532"
            ],
            [
                "nom"=>"Gary",
                "age"=>"38",
                "email"=>"Gary@hotmail.com",
                "telephone"=>"0456546542"
            ],
            [
                "nom"=>"Junior",
                "age"=>"18",
                "email"=>"Junior@hotmail.com",
                "telephone"=>"045851456"
            ]
        ]);
    }
}
