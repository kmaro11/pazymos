<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class NewsList extends Component
{
    public array $articles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->articles = [];
        for ($i = 0; $i < 6; $i++) {
            $this->articles[] = [
                'title' => 'Naujienų antraštė ' . ($i + 1),
                'image' => 'https://picsum.photos/seed/news' . $i . '/600/400',
                'date' => now()->subDays($i * 5)->format('Y-m-d'),
                'excerpt' => 'Trumpas naujienos aprašymas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'url' => '#',
                'category' => 'Kategorija ' . ($i % 2 + 1),
            ];
        }
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.news-list');
    }
}
