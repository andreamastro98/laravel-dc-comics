<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datiComics = config('db.comics');

        foreach($datiComics as $elem ){
            $newComic = new Comic();
            $newComic->title = $elem['title'];
            $newComic->description = $elem['description'];
            $newComic->thumb = $elem['thumb'];
            $newComic->price = $elem['price'];
            $newComic->series = $elem['series'];
            $newComic->sale_date = $elem['sale_date'];
            $newComic->type = $elem['type'];
            $newComic->artists = is_array($elem['artists']) ? implode(', ', $elem['artists']) : $elem['artists'];
            $newComic->writers = is_array($elem['writers']) ? implode(', ', $elem['writers']) : $elem['writers'];
            $newComic->save();
        }
    }
}