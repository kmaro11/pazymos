<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class CourseComplect extends Component
{
    public array $complect;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($complect = null)
    {
        $this->complect = $complect ?? [
            'main_title' => 'Šie mokymai priklauso "Y komplektui"',
            'main_subtitle' => 'Cras a morbi id duis volutpat porta hendrerit ultrices.',
            'item' => [
                'title' => 'Komplekto pavadinimas "Y"',
                'price' => 40,
                'original_price' => 45,
                'tags' => ['Individualiai / Įmonėms', 'Online', 'Fiziniai'],
            ],
            'courses' => [
                [
                    'type' => 'complect',
                    'title' => 'Komplekto pavadinimas "Y"',
                    'price' => 40,
                    'original_price' => 45,
                    'tags' => ['Individualiai / Įmonėms', 'Online', 'Fiziniai'],
                ],
                [
                    'type' => 'course',
                    'title' => 'Mokymų pavadinimas',
                    'price' => 15,
                    'tags' => ['Individualiai / Įmonėms', 'Online'],
                ],
                [
                    'type' => 'course',
                    'title' => 'Mokymų pavadinimas',
                    'price' => 15,
                    'tags' => ['Individualiai / Įmonėms', 'Online', 'Fiziniai'],
                ],
                [
                    'type' => 'course',
                    'title' => 'Mokymų pavadinimas',
                    'price' => 15,
                    'tags' => ['Individualiai / Įmonėms', 'Online'],
                ],
            ],
        ];
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.course-complect');
    }
}
