<?php

namespace App\MangaEden;

use Illuminate\Support\Facades\Http;

class MangaEden {

    public $url;

    public function __construct()
    {
        $this->url = 'https://www.mangaeden.com/api/';
    }

    public function getAllManga()
    {
        // Endpoint = https://www.mangaeden.com/api/list/[language]/
        $response = Http::get($this->url . 'list/0');
        return $response->json();
    }

    public function getMangaList($page = 0, $limit = 25)
    {
        // Endpoint = https://www.mangaeden.com/api/list/[language]/?p=X&l=Y
        $response = Http::get($this->url . 'list/0/?p=' . $page . '&l=' . $limit);
        return $response->json();
    }

    public function getMangaInfo($id)
    {
        // Endpoint = https://www.mangaeden.com/api/manga/[manga.id]/
        $response = Http::get($this->url . 'manga/' . $id);
        return $response->json();
    }

    public function getChapter($id)
    {
        // Endpoint = https://www.mangaeden.com/api/chapter/[chapter.id]/
        $response = Http::get($this->url . 'chapter/' . $id);
        return $response->json();
    }

}
