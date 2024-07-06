<?php

namespace App\Livewire;

use App\Models\ResearchContent;
use Livewire\Component;
use App\Models\Research;

class ShowResearchPage extends Component
{
    public function render()
    {
        $researches = Research::orderBy('id', 'desc')->get();
        $researchContent = ResearchContent::orderBy('id', 'asc')->get();
        return view('livewire.show-research-page',[
                'researches' => $researches,
                'researchContent' => $researchContent
            ]);
    }
}
