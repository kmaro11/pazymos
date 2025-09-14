<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class TrainingInfo extends Component
{
    public string $title;
    public ?string $description;
    /** @var array<int, array{title:string,name:string,info?:string}> */
    public array $items;

    public function __construct(string $title = 'Kam skirta', ?string $description = null, array $items = [])
    {
        $this->title = $title;
        $this->description = $description;
        $this->items = $items;
    }

    public function render(): View
    {
        return view('components.training-info');
    }
}


