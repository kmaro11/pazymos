<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class TrainingDescription extends Component
{
    /**
     * @var array
     */
    public $items;

    /**
     * Create a new component instance.
     *
     * @param  array  $items
     * @return void
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.training-description');
    }
}
