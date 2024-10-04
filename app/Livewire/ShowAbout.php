<?php

namespace App\Livewire;

use App\Models\AboutPage;
use App\Models\Skills;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowAbout extends Component
{
    #[Layout('components.layouts.navbar')]
    public function render()
    {
        $data = AboutPage::orderBy('title','ASC')->get();
        $skills = Skills::orderBy('name','ASC')->get();
        return view('livewire.show-about',[
            'data'=> $data,
            'skills' => $skills
        ]);
    }
}
