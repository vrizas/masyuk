<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ResepCard extends Component
{
    public $resep;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($resep)
    {
        $this->resep = $resep;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.resep-card');
    }
}
