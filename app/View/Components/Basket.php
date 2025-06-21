<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Basket extends Component
{
    public ?string $description;
    public ?array $dates;
    public float $individualPrice;
    public float $companyPrice;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        ?array $dates = null,
        ?string $description = 'Šiems mokymams yra privalomieji ir fiziniai mokymai. Įsigijus mokymus, Moodle sistemoje galėsite pasirinkti jums tinkamą laiką fiziniams mokymams.'
    ) {
        $this->description = $description;
        $this->individualPrice = 24.00;
        $this->companyPrice = 99.00;
        $this->dates = $dates ?? [
            [
                'date' => 'Vasario 23 d., Vilnius',
                'time' => '15:20 - 16:20',
                'available' => 0,
                'total' => 16
            ],
            [
                'date' => 'Kovo 14 d., Vilnius',
                'time' => '15:20 - 16:20',
                'available' => 5,
                'total' => 16
            ],
            [
                'date' => 'Balandžio 14 d., Kaunas',
                'time' => '15:20 - 16:20',
                'available' => 12,
                'total' => 16
            ],
            [
                'date' => 'Balandžio 18 d., Klaipėda',
                'time' => '15:20 - 16:20',
                'available' => 15,
                'total' => 16
            ]
        ];
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.basket');
    }
}
