<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EunusAli;

class ShowEunusAliPage extends Component
{
    public function render()
    {
        $values = EunusAli::orderBy('id', 'desc')->get();

        return view('livewire.show-eunus-ali-page',[
            'values' => $values
        ]);

    }
}
