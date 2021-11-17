<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notizia;

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
        foreach ($news as $notizia){
            $newNotizia = new Notizia();
            $newNotizia ->title = $notizia ['title'];
            $newNotizia ->autore = $notizia ['autore'];
            $newNotizia ->notizia_content = $notizia ['notizia_content'];
            
            // $newNotizia ->slug =Str::slug($notizia ['title'], "-") ;
            $newNotizia ->save();


        };
    }
}
