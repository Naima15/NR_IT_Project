<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CourseDetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.course-details-component')->layout("layouts.base");
    }
}
