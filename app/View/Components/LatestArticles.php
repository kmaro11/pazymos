<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestArticles extends Component
{
    public array $items;

    public function __construct(
        array $items = []
    ) {
        $defaultItems = [
            [
                'title' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet',
                'description' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'link' => '#',
                'category' => 'Naujienos'
            ],
            [
                'title' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet',
                'description' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'link' => '#',
                'category' => 'Atnaujinimai'
            ],
            [
                'title' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet',
                'description' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'link' => '#',
                'category' => 'Patarimai'
            ]
        ];

        $sourceItems = !empty($items) ? $items : $defaultItems;

        $this->items = array_map(function ($item) {
            return [
                'title' => $item['title'],
                'excerpt' => $item['description'],
                'image' => $item['image'],
                'url' => $item['link'],
                'date' => null, // Latest articles don't have a date in this context
                'category' => $item['category'] ?? null,
            ];
        }, $sourceItems);
    }

    public function render()
    {
        return view('components.latest-articles');
    }
}
