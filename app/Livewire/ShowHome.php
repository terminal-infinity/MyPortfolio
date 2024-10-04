<?php

namespace App\Livewire;

use App\Models\HomePage;
use Livewire\Component;

class ShowHome extends Component
{
    
    public function render()
    {
        $data = HomePage::orderBy('name','ASC')->get();
        return view('livewire.show-home',[
            'data'=> $data
        ]);
    }
}
