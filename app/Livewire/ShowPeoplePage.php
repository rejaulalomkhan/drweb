<?php

namespace App\Livewire;

use App\Models\Peoples;
use Livewire\Component;
use App\Models\FeaturedPeople;

class ShowPeoplePage extends Component
{
    public function render()
    {
        $featuredPeoples = FeaturedPeople::all();
        $peoples = Peoples::orderBy('id', 'desc')->get();
        return view('livewire.show-people-page', [
            'peoples' => $peoples,
            'featuredPeoples' => $featuredPeoples

        ]);

    }
}
