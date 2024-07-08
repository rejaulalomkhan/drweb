<?php

namespace App\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class ShowContactPage extends Component
{
    public function render()
    {
        $Contacts = ContactUs::orderBy('id', 'desc')->get();
        return view('livewire.show-contact-page',[
            'Contacts' => $Contacts
        ]);
    }
}
