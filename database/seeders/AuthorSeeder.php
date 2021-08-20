<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
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
                'name' => 'Kamome Shirahama',
                'author_id' => 1,
                'birthday' => 0705,
                'nationality' => "Japonaise"
            ],
            [
                'name' => 'Adashitoka',
                'author_id' => 2,
                'birthday' => 1969,
                'nationality' => "Japonaise"
            ],
            [
                'name' => 'Masashi Kishimoto',
                'author_id' => 3,
                'birthday' => 1974,
                'nationality' => "Japonaise"
            ]
        ]);
    }
}
