<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\MangaEden\MangaEden;

class ImageShelf extends Component
{
    public $manga, $mangaChapters, $images, $chapterId, $chapter;

    public function mount($manga, $chapterId, $chapter,  MangaEden $mangaEden)
    {
        $this->manga = $manga;
        $this->chapter = $chapter;
        $this->mangaChapters = $mangaEden->getMangaInfo($manga->manga_id)['chapters'];
        $this->images = array_reverse($mangaEden->getChapter($chapterId)['images']);
    }

    public function updatedChapterId()
    {
        $mangaEden = new MangaEden;
        $this->images = array_reverse($mangaEden->getChapter($this->chapterId)['images']);
    }

    public function render()
    {
        return view('livewire.image-shelf');
    }
}
