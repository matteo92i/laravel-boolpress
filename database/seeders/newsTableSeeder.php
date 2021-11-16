<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class newsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                "title" => "esports mercato",
                "autore" => "matteo iovane",
                "notizia_content" => "rekkles va via"
            ],
            [
                "title" => "esports mercato",
                "autore" => "matteo iovane",
                "notizia_content" => "rekkles va via"
            ],
            [
                "title" => "esports mercato",
                "autore" => "matteo iovane",
                "notizia_content" => "rekkles va via"
            ],
        ];
    }
}
