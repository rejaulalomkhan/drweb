<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LabLife;

class ShowLabLifePage extends Component
{
    public function render()
    {
        $Lablifes = LabLife::orderBy('id', 'desc')->get();
        return view('livewire.show-lab-life-page',[
            'Lablifes' => $Lablifes
        ]);
    }
}
