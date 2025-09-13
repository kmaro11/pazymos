<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PopularCourses extends Component
{
    public function __construct(
        public array $courses = [
            [
                'title' => 'Mokymų paketas: švietimo įstaigų darbuotojams',
                'price' => '€45',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'labels' => ['Online', 'Fiziniai'],
                'features' => [
                    'PP',
                    'HB',
                    'H1',
                ],
                'link' => '#',
            ],
            [
                'title' => 'Mokymų paketas: sporto klubų, baseinų, pirčių, sveikatingumo paslaugas teikiantiems ',
                'price' => '€125',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'labels' => ['Online'],
                'features' => [
                    'PP',
                    'H1',
                ],
                'link' => '#',
            ],
            [
                'title' => 'Mokymų paketas: tiesiogiai ir netiesiogiai maistą tvarkantiems darbuotojams',
                'price' => '€125',
                'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
                'labels' => ['Online'],
                'features' => [
                    'HB',
                    'H1',
                ],
                'link' => '#',
            ],
            [
                'title' => 'Verslo mokymų paketas',
                'price' => '€199',
                'image' => 'https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg',
                'labels' => ['Fiziniai'],
                'features' => [
                    'Komandos formavimo mokymai',
                    'Lyderystės pagrindai',
                    'Efektyvi komunikacija',
                    'Projektų valdymas',
                ],
                'link' => '#',
            ],
            [
                'title' => 'IT specialisto kursai',
                'price' => '€299',
                'image' => 'https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg',
                'labels' => ['Online'],
                'features' => [
                    'Programavimo pagrindai',
                    'Duomenų bazės',
                    'Tinklų administravimas',
                    'Saugumo pagrindai',
                ],
                'link' => '#',
            ],
            [
                'title' => 'Marketingo mokymai',
                'price' => '€150',
                'image' => 'https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg',
                'labels' => ['Online', 'Fiziniai'],
                'features' => [
                    'Skaitmeninis marketingas',
                    'Socialinių tinklų valdymas',
                    'Turinio kūrimas',
                    'Reklamos strategijos',
                ],
                'link' => '#',
            ],
        ]
    ) {}

    public function render()
    {
        return view('components.popular-courses');
    }
}
