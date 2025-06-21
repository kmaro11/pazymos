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
                    'title' => 'Mokymų pavadinimas',
                    'price' => 15,
                    'tags' => ['Individualiai / Įmonėms', 'Online'],
                ],
                [
                    'title' => 'Mokymų pavadinimas',
                    'price' => 15,
                    'tags' => ['Individualiai / Įmonėms', 'Online', 'Fiziniai'],
                ],
                [
                    'title' => 'Mokymų pavadinimas',
                    'price' => 15,
                    'tags' => ['Individualiai / Įmonėms', 'Online'],
                ],
            ],
        ];

        $itemTags = [];
        if (isset($this->complect['item']['price'])) {
            $itemTags[] = [
                'text' => '€' . $this->complect['item']['price'],
                'class' => 'text-black-100 font-bold'
            ];
        }
        if (isset($this->complect['item']['original_price'])) {
            $itemTags[] = [
                'text' => '€' . $this->complect['item']['original_price'],
                'class' => 'line-through'
            ];
        }
        foreach ($this->complect['item']['tags'] as $tag) {
            $itemTags[] = ['text' => $tag, 'class' => ''];
        }
        $this->complect['item']['tags'] = $itemTags;

        $processedCourses = [];
        foreach ($this->complect['courses'] as $course) {
            $courseTags = [];
            if (isset($course['price'])) {
                $courseTags[] = [
                    'text' => '€' . $course['price'],
                    'class' => 'text-black-100 font-bold'
                ];
            }
            foreach ($course['tags'] as $tag) {
                $courseTags[] = ['text' => $tag, 'class' => ''];
            }
            $course['tags'] = $courseTags;
            $processedCourses[] = $course;
        }
        $this->complect['courses'] = $processedCourses;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.course-complect');
    }
}
