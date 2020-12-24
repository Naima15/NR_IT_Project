<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SeminarDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.seminar-details-component')->layout("layouts.base");
    }
}
