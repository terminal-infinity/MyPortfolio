<?php

namespace App\Livewire;

use App\Models\Education;
use App\Models\Experience;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowResume extends Component
{
    #[Layout('components.layouts.navbar')]
    public function render()
    {
        $data = Education::orderBy('deg_title','ASC')->get();
        $experience = Experience::orderBy('title','ASC')->get();
        return view('livewire.show-resume',[
            'data'=> $data,
            'experience'=> $experience
        ]);
    }
}
