<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class ProcessSteps extends Component
{
    public array $steps;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->steps = [
            [
                'step_label' => 'Žingsnis 1',
                'title' => 'Išsirink dominančius mokymus',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.',
                'features' => [
                    ['title' => 'Privalumas 1', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.'],
                    ['title' => 'Privalumas 2', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
                ],
                'button_text' => 'Rinktis Mokymus',
                'button_url' => '#',
                'image_url' => '/images/step-1.jpg',
            ],
            [
                'step_label' => 'Žingsnis 2',
                'title' => 'Pereik mokymosi programą',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.',
                'features' => [
                    ['title' => 'Privalumas 1', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.'],
                    ['title' => 'Privalumas 2', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
                ],
                'button_text' => 'Rinktis Mokymus',
                'button_url' => '#',
                'image_url' => '/images/step-2.jpg',
            ],
            [
                'step_label' => 'Žingsnis 3',
                'title' => 'Gauk sertifikatą ir vykdyk veiklą',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.',
                'features' => [
                    ['title' => 'Privalumas 1', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.'],
                    ['title' => 'Privalumas 2', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'],
                ],
                'button_text' => 'Rinktis Mokymus',
                'button_url' => '#',
                'image_url' => '/images/step-3.jpg',
            ],
        ];
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.process-steps');
    }
}
