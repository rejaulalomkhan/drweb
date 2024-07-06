<?php

namespace App\Livewire;

use App\Models\Peoples;
use Livewire\Component;

class ShowPeoplePage extends Component
{
    public function render()
    {
        $peoples = Peoples::orderBy('id', 'desc')->get();
        return view('livewire.show-people-page', [
            'peoples' => $peoples
        ]);

    }
}
