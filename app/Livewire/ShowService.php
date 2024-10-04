<?php

namespace App\Livewire;

use App\Models\ServicePage;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowService extends Component
{
    #[Layout('components.layouts.navbar')]
    public function render()
    {
        $service = ServicePage::orderBy('title','ASC')->get();
        return view('livewire.show-service',[
            'service'=> $service
        ]);
    }
}
