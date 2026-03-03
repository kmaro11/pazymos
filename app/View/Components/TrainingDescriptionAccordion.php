<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class TrainingDescriptionAccordion extends Component
{
    public $sections;

    public function __construct($sections = [])
    {
        $this->sections = $sections;
    }

    public function render(): View
    {
        return view('components.training-description-accordion');
    }
}
