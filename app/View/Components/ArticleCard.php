<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ArticleCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public array $article
    ) {}

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.article-card');
    }
}
