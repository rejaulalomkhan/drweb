<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Publications;

class ShowPublicationPage extends Component
{
    public function render()
    {
        //publications model content get here
        $publications = Publications::all();
        return view('livewire.show-publication-page',[
                'publications' => $publications
            ]);
    }
}
