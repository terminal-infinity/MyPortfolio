<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ProtfolioPage;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Url;


class ShowPortfolio extends Component
{
    #[Layout('components.layouts.navbar')]

    #[Url]
    public $categorySlug=null;
    public function render()
    {
        $categories= Category::all();
        if(!empty($this->categorySlug)){
            $category=Category::where('slug',$this->categorySlug)->first();

            if(empty($category)){
                abort(404);
            }
            $portfolio= ProtfolioPage::orderBy('title','ASC')
                        ->where('category_id',$category->id)
                        ->get();
        }else{
            $portfolio= ProtfolioPage::orderBy('title','ASC')->get();
        }

        
        
        return view('livewire.show-portfolio',[
            'portfolio'=> $portfolio,
            'categories'=> $categories,

        ]);
    }
}
