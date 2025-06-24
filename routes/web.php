<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('trainings', 'trainings');
Route::view('trainings-individual-internal', 'trainings-individual-internal');
Route::view('training-category', 'training-category');

Route::view('about', 'about');
Route::view('how-it-works', 'how-it-works');
Route::view('news', 'news');
Route::view('basket', 'basket');

Route::get('/news', function () {
    return view('news');
});

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
    ])->name('basket');
});

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::view('/contacts', 'contacts');
Route::view('/thank-you', 'thank-you');
