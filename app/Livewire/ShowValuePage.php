<?php

namespace App\Livewire;

use App\Models\Values;
use App\Models\ValueTopDescription;
use Livewire\Component;

class ShowValuePage extends Component
{
    public function render()
    {
        // values model content get here
        $values = Values::orderBy('id', 'desc')->get();
        $tValues = ValueTopDescription::orderBy('id', 'desc')->get();
        return view('livewire.show-value-page',
            [
                'values' => $values,
                'tValues' => $tValues
            ]);

    }
}
