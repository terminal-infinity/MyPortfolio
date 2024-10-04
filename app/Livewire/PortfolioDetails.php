<?php

namespace App\Livewire;

use App\Models\Protfolio;
use App\Models\ProtfolioPage;
use Livewire\Component;

class PortfolioDetails extends Component
{
    public $portfolioID=null;

    public function mount($id){
        $this->portfolioID = $id;
    }
    public function render()
    {
        $portfolio=ProtfolioPage::select('protfolio_pages.*','categories.name as category_name')-> leftJoin('categories','categories.id','protfolio_pages.category_id')->findOrFail($this->portfolioID);
        return view('livewire.portfolio-details',[
            'portfolio'=> $portfolio
        ]);
    }
}
