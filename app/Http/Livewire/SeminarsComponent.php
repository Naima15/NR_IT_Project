<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SeminarsComponent extends Component
{
    public function render()
    {
        return view('livewire.seminars-component')->layout("layouts.base");
    }
}
