<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comic_list = config('comic');
        foreach($comic_list as $comic) {
            $new_comic = new Comic();
            $new_comic->title = $comic['titolo'];
            $new_comic->description = $comic['descrizione'];
            $new_comic->thumb = $comic['immagine'];
            $new_comic->price = $comic['prezzo'];
            $new_comic->series = $comic['serie'];
            $new_comic->sale_date = $comic['data_vendita'];
            $new_comic->type = $comic['genere'];
            $new_comic->save();
        }
    }
}
