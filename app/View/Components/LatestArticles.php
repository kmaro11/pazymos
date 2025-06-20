<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestArticles extends Component
{
    public function __construct(
        public array $items = [
            [
                'title' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet',
                'description' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'link' => '#'
            ],
            [
                'title' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet',
                'description' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'link' => '#'
            ],
            [
                'title' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet',
                'description' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'link' => '#'
            ]
        ]
    ) {}

    public function render()
    {
        return view('components.latest-articles');
    }
}
