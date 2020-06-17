<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EpisodeShelf extends Component
{
    public $animeId = '';
    public $episodes;
    

    public function mount($animeId)
    {
        $this->animeId = $animeId;

        //Episodes
        $this->episodes = Http::get("https://kitsu.io/api/edge/episodes?filter%5BmediaId%5D=$animeId&page%5Blimit%5D=12")->json();
        // dump($this->episodes['data']);
    }

    public function next()
    {
        if (isset($this->episodes['links']['next'])) {
            $this->episodes = Http::get($this->episodes['links']['next'])->json();
        }
    }

    public function previous()
    {
        if (isset($this->episodes['links']['prev'])) {
            $this->episodes = Http::get($this->episodes['links']['prev'])->json();
        }
    }


    public function render()
    {
        return view('livewire.episode-shelf');
    }
}
