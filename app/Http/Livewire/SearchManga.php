<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Manga;

class SearchManga extends Component
{

    public $search;

    public function render()
    {
        if ($this->search == '') {
            $searchResult = [];
        }else{
            $searchResult = Manga::where('title', 'like', '%'.$this->search.'%')->orderBy('hits', 'DESC')->get();
        }
        
        return view('livewire.search-manga', [
            'mangas' => $searchResult,
        ]);
    }
}
