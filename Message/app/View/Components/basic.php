<?php

namespace App\View\Components;

use Illuminate\View\Component;

class basic extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $main;
    public function __construct($main)
    {
        //
        $this->main=$main;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.basic');
    }
}
