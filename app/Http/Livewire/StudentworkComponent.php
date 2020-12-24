<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentworkComponent extends Component
{
    public function render()
    {
        return view('livewire.studentwork-component')->layout("layouts.base");
    }
}
