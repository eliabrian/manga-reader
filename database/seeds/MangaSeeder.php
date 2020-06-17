<?php

use Illuminate\Database\Seeder;

use App\MangaEden\MangaEden;
use App\Manga;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(MangaEden $mangaEden)
    {
        
        $mangas = $mangaEden->getAllManga();

        foreach ($mangas['manga'] as $manga ) {
            if (array_key_exists('ld', $manga)) {
                $komik = [
                    'manga_id' => $manga['i'],
                    'slug' => $manga['a'],
                    'title' => $manga['t'],
                    'status' => $manga['s'],
                    'hits' => $manga['h'],
                    'image' => $manga['im'],
                    'last_updated' => $manga['ld']

                ];
                Manga::updateOrCreate($komik);
            }
        }
    }
}
