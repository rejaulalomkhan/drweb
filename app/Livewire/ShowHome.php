<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Research;
use App\Models\FeaturedPeople;

class ShowHome extends Component
{
    public function render()
    {

            $featuredPeoples = FeaturedPeople::orderBy('id', 'desc')->get();
            $researches = Research::orderBy('id', 'desc')->get();
            return view('livewire.show-home', [
                'featuredPeoples' => $featuredPeoples,
                'researches' => $researches

            ]);
    }
}
