<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomeCarousel extends Component
{
    public $reseps;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($reseps)
    {
        $this->reseps = $reseps;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-carousel');
    }
}
