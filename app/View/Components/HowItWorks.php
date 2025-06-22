<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HowItWorks extends Component
{
    public function __construct(
        public array $items = [
            [
                'title' => 'Išsirink dominančius mokymus',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.',
                'icon' => 'swipe.svg'
            ],
            [
                'title' => 'Pereik mokymosi programą',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.',
                'icon' => 'notebook.svg'
            ],
            [
                'title' => 'Gauk sertifikatą ir vykdyk veiklą',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.',
                'icon' => 'graduation.svg'
            ]
        ],
        public ?string $title = null,
        public ?string $description = null,
        public string $descriptionClasses = "text-gray-200 text-center font-['Helvetica_Neue'] text-base font-normal leading-6 mb-10"
    ) {}

    public function render()
    {
        return view('components.how-it-works');
    }
}
