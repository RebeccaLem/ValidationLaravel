<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'Coco',
                'publication_year' => 2016,
                'graphicNovels_id' => 1,
                'designer' => "Kamome Shirahama"
            ],
            [
                'name' => 'Yato',
                'publication_year' => 2010,
                'graphicNovels_id' => 2,
                'designer' => "Adashitoka"
            ],
            [
                'name' => 'Naruto',
                'publication_year' => 1999,
                'graphicNovels_id' => 3,
                'designer' => "Masashi Kishimoto"
            ]
        ]);
    }
}
