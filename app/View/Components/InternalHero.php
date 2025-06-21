<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class InternalHero extends Component
{
    public $avatar;
    public $title;
    public $descriptions;
    public $breadcrumbs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($avatar, $title, $descriptions = [], $breadcrumbs = [])
    {
        $this->avatar = $avatar;
        $this->title = $title;
        $this->descriptions = $descriptions;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.internal-hero');
    }
}
