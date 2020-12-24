<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SeminarComponent extends Component
{
    public function render()
    {
        return view('livewire.seminar-component')->layout("layouts.base");
    }
}
