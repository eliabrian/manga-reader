<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\MangaEden\MangaEden;

use App\Manga;

class MangaController extends Controller
{
    private $mangaEden;

    public function __construct(MangaEden $mangaEden)
    {
        $this->mangaEden = $mangaEden;
    }

    public function index($page = 0)
    {
        $response = $this->mangaEden->getMangaList($page);

        return view('manga.index', [
            'mangas' => $response['manga']
        ]);
    }

    public function show(Manga $manga)
    {
        $mangaResponse = $this->mangaEden->getMangaInfo($manga->manga_id);
        $manga = collect($mangaResponse)->merge(['id' => $manga->manga_id]);
        $chapter = collect($manga['chapters']);

        return view('manga.show', [
            'manga' => $manga
        ]);
    }

    public function chapter(Manga $manga,  $chapter)
    {
        $images = $this->mangaEden->getChapter($chapter)['images'];
        $mangaResponse = $this->mangaEden->getMangaInfo($manga->manga_id);
        $chapters = collect($mangaResponse['chapters']);
        
        $currentChapter = $chapters->where(3, '=', $chapter)->first();
        $next = $chapters->where(0, '>', $currentChapter[0])->last();
        $prev = $chapters->where(0, '<',$currentChapter[0])->first();

        return view('manga.chapter', [
            'currentChapter' => $currentChapter,
            'manga' => $manga,
            'images' => $images,
            'next' => $next,
            'prev' => $prev,
        ]);
    }
}
