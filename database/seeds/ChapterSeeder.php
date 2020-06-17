<?php

use Illuminate\Database\Seeder;

use App\Chapter;
use App\MangaEden\MangaEden;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(MangaEden $mangaEden)
    {

        // $mangas = $mangaEden->getAllManga();

        // foreach($mangas['manga'] as $manga){
        //     $mangaDetail = $mangaEden->getMangaInfo($manga['i']);
        //     foreach($mangaDetail['chapters'] as $chapter){
        //         $capter = [
        //             'chapter_id' => $chapter['3'],
        //             'champter_number' => $chapter['0'],
        //             'manga_id' => $manga['i'],
        //         ];
        //         Chapter::updateOrCreate($capter);
        //     }
        // }
    }
}
