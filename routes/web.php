<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('trainings', function () {
    $trainings = [
        [
            'title' => 'Mokymų komplektas',
            'price' => '€45',
            'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
            'labels' => ['Online', 'Fiziniai'],
            'filters' => ['higiena', 'pirmosios-pagalbos', 'gaisrine-ir-civiline-sauga', 'sveikatos-prieziura'],
            'features' => [
                'Ultrices ultricies faucibus eu sit',
                'Arcu pretium ultricies convallis ultricies',
                'Sed turpis feugiat in id',
                'Auge massa enim euismod purus',
            ],
            'link' => '#',
        ],
        [
            'title' => 'Pirmosios pagalbos kursai',
            'price' => '€35',
            'image' => 'https://images.pexels.com/photos/532220/pexels-photo-532220.jpeg',
            'labels' => ['Kontaktiniai', '16 val.'],
            'filters' => ['pirmosios-pagalbos'],
            'features' => [
                'Etiam cursus, arcu vitae convallis',
                'Morbi facilisis, enim at dictum',
                'Vestibulum ante ipsum primis',
                'Nulla facilisi euismod purus',
            ],
            'link' => '#',
        ],
        [
            'title' => 'Gaisrinė sauga',
            'price' => '€40',
            'image' => 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg',
            'labels' => ['Online', '8 val.'],
            'filters' => ['gaisrine-ir-civiline-sauga'],
            'features' => [
                'Suspendisse potenti euismod',
                'Curabitur non nulla sit amet',
                'Vivamus magna justo lacinia',
                'Praesent sapien massa convallis',
            ],
            'link' => '#',
        ],
        [
            'title' => 'Sveikatos priežiūra',
            'price' => '€50',
            'image' => 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg',
            'labels' => ['Online', '12 val.'],
            'filters' => ['sveikatos-prieziura'],
            'features' => [
                'Suspendisse potenti euismod',
                'Curabitur non nulla sit amet',
                'Vivamus magna justo lacinia',
                'Praesent sapien massa convallis',
            ],
            'link' => '#',
        ],

    ];
    return view('trainings', ['trainings' => $trainings]);
})->name('trainings');
Route::view('trainings-individual-internal', 'trainings-individual-internal')->name('trainings-individual-internal');
Route::get('training-category', function () {
    $trainings = [
        [
            'title' => 'Mokymų komplektas',
            'price' => '€45',
            'image' => 'https://images.pexels.com/photos/4065624/pexels-photo-4065624.jpeg',
            'labels' => ['Online', 'Fiziniai'],
            'filters' => ['higiena'],
            'features' => [
                'Ultrices ultricies faucibus eu sit',
                'Arcu pretium ultricies convallis ultricies',
                'Sed turpis feugiat in id',
                'Auge massa enim euismod purus',
            ],
            'link' => '#',
        ],
        [
            'title' => 'Pirmosios pagalbos kursai',
            'price' => '€35',
            'image' => 'https://images.pexels.com/photos/532220/pexels-photo-532220.jpeg',
            'labels' => ['Kontaktiniai', '16 val.'],
            'filters' => ['pirmosios-pagalbos'],
            'features' => [
                'Etiam cursus, arcu vitae convallis',
                'Morbi facilisis, enim at dictum',
                'Vestibulum ante ipsum primis',
                'Nulla facilisi euismod purus',
            ],
            'link' => '#',
        ],
        [
            'title' => 'Gaisrinė sauga',
            'price' => '€40',
            'image' => 'https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg',
            'labels' => ['Online', '8 val.'],
            'filters' => ['gaisrine-ir-civiline-sauga'],
            'features' => [
                'Suspendisse potenti euismod',
                'Curabitur non nulla sit amet',
                'Vivamus magna justo lacinia',
                'Praesent sapien massa convallis',
            ],
            'link' => '#',
        ],
    ];
    return view('training-category', ['trainings' => $trainings]);
})->name('training-category');

Route::view('about', 'about')->name('about');
Route::view('how-it-works', 'how-it-works')->name('how-it-works');
Route::view('news', 'news')->name('news');

Route::get('/news/{slug}', function ($slug) {
    $article = [
        'slug' => $slug,
        'category' => 'Patarimai',
        'title' => 'Kaip efektyviai mokytis nuotoliniu būdu: 5 patarimai',
        'excerpt' => 'Auctor et magna feugiat pretium ante volutpat sagittis augue amet. Interdum dignissim aliquam nec augue leo mattis urna eros. Vivamus velit urna vitae integer sem in. Pretium ultricies ut aliquam nulla sed. Sagittis sed ac ut semper et sed a purus. Augue ut vel tristique malesuada mollis enim.',
        'image' => 'https://picsum.photos/seed/' . $slug . '/1320/370',
        'content' => "
            <h1>1. Susikurkite dedikuotą mokymosi erdvę</h1>
            <p>Svarbu turėti aiškiai apibrėžtą vietą, skirtą tik mokymuisi. Tai padeda jūsų smegenims \"persijungti\" į mokymosi režimą. Pašalinkite visus nereikalingus daiktus ir įsitikinkite, kad turite gerą apšvietimą ir patogią kėdę.</p>
            <p>Svarbu turėti aiškiai apibrėžtą vietą, skirtą tik mokymuisi. Tai padeda jūsų smegenims \"persijungti\" į mokymosi režimą. Pašalinkite visus nereikalingus daiktus ir įsitikinkite, kad turite gerą apšvietimą ir patogią kėdę.</p>
            <p>Svarbu turėti aiškiai apibrėžtą vietą, skirtą tik mokymuisi. Tai padeda jūsų smegenims \"persijungti\" į mokymosi režimą. Pašalinkite visus nereikalingus daiktus ir įsitikinkite, kad turite gerą apšvietimą ir patogią kėdę.</p>
            <p>Svarbu turėti aiškiai apibrėžtą vietą, skirtą tik mokymuisi. Tai padeda jūsų smegenims \"persijungti\" į mokymosi režimą. Pašalinkite visus nereikalingus daiktus ir įsitikinkite, kad turite gerą apšvietimą ir patogią kėdę.</p>
            <p>Svarbu turėti aiškiai apibrėžtą vietą, skirtą tik mokymuisi. Tai padeda jūsų smegenims \"persijungti\" į mokymosi režimą. Pašalinkite visus nereikalingus daiktus ir įsitikinkite, kad turite gerą apšvietimą ir patogią kėdę.</p>
            
            <h2>2. Laikykitės tvarkaraščio</h2>
            <p>Nors mokymasis namuose suteikia lankstumo, struktūra yra būtina. Nusistatykite konkretų laiką mokymuisi, pertraukoms ir poilsiui. Tai padės išlaikyti discipliną ir išvengti prokrastinacijos.</p>

            <h3>Pomodoro technika</h3>
            <p>Išbandykite Pomodoro techniką: 25 minutes intensyviai mokykitės, po to darykite 5 minučių pertrauką. Po keturių tokių ciklų, padarykite ilgesnę, 15-30 minučių pertrauką. Tai padeda išlaikyti aukštą koncentracijos lygį.</p>

            <h2>3. Naudokite aktyvius mokymosi metodus</h2>
            <p>Vietoj pasyvaus skaitymo ar klausymosi, įsitraukite į medžiagą aktyviai. Užsirašinėkite, perpasakokite medžiagą savais žodžiais, kurkite minčių žemėlapius ar mokykite ką nors kitą. Tai padeda geriau įsisavinti informaciją.</p>
            
            <ul>
                <li>Užduočių sprendimas</li>
                <li>Atvejų analizė</li>
                <li>Diskusijos forumuose</li>
            </ul>

            <h2>4. Pašalinkite trikdžius</h2>
            <p>Socialiniai tinklai, pranešimai ir kiti skaitmeniniai trikdžiai yra didžiausi produktyvumo priešai. Mokymosi metu išjunkite pranešimus telefone ir kompiuteryje, uždarykite nereikalingus naršyklės langus.</p>
            
            <h2>5. Nepamirškite poilsio</h2>
            <p>Kokybiškas poilsis yra toks pat svarbus kaip ir pats mokymasis. Įsitikinkite, kad pakankamai miegate, sveikai maitinatės ir reguliariai judate. Perdegimas yra reali grėsmė, todėl svarbu rasti balansą.</p>
        "
    ];

    return view('news-internal', ['article' => $article]);
});

Route::get('/basket', function () {
    $basket = [
        [
            'title' => 'Projektų valdymo pagrindai',
            'tags' => [
                ['text' => 'Online'],
                ['text' => 'Lietuvių k.'],
                ['text' => '8 val.'],
            ],
            'price' => 35.00,
            'quantity' => 2,
        ],
        [
            'title' => 'Komandinis darbas ir lyderystė',
            'tags' => [
                ['text' => 'Vilnius'],
                ['text' => 'Anglų k.'],
                ['text' => '16 val.'],
            ],
            'price' => 70.00,
            'quantity' => 1,
        ],
    ];

    $subtotal = collect($basket)->sum(fn($item) => $item['price'] * $item['quantity']);
    $totalItems = collect($basket)->sum('quantity');
    $total = $subtotal;

    return view('basket', [
        'basket' => $basket,
        'subtotal' => $subtotal,
        'totalItems' => $totalItems,
        'total' => $total,
    ]);
})->name('basket');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::view('/contacts', 'contacts')->name('contact');
Route::view('/thank-you', 'thank-you');

Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/direct-marketing-consent', 'direct-marketing-consent')->name('direct-marketing-consent');

Route::get('/all-trainings', function () {
    $trainings = [
        [
            'title' => 'Higienos pažymėjimas',
            'category' => 'Higiena',
            'location' => 'Vilnius',
            'date' => '2024-07-10',
            'time' => '10:00',
            'price' => 24,
            'tags' => ['Online', '8 val.'],
            'filters' => ['higiena'],
        ],
        [
            'title' => 'Pirmosios pagalbos kursai',
            'category' => 'Pirmosios pagalbos',
            'location' => 'Kaunas',
            'date' => '2024-07-15',
            'time' => '13:00',
            'price' => 35,
            'tags' => ['Kontaktiniai', '16 val.'],
            'filters' => ['pirmosios-pagalbos'],
        ],
        [
            'title' => 'Gaisrinė sauga',
            'category' => 'Gaisrinė ir civilinė sauga',
            'location' => 'Klaipėda',
            'date' => '2024-07-20',
            'time' => '09:00',
            'price' => 40,
            'tags' => ['Online', '8 val.'],
            'filters' => ['gaisrine-ir-civiline-sauga'],
        ],
    ];
    return view('all-trainings', ['trainings' => $trainings]);
})->name('all-trainings');
