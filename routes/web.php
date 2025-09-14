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
Route::get('/policy', function () {
    // Example CMS-like payload
    $policy = [
        'updated_at' => now()->toDateString(),
        'html' => '<h1>Paslaugų pirkimo taisyklės</h1><p>Baltijos technologijų institutas, UAB (įmonės kodas 304166570, registracijos adresas Saulėtekio al. 17, LT-10224 Vilnius) (toliau – Mokymo įstaiga) atstovaujama direktorės Linos Kazarauskaitės, veikiančios pagal įmonės įstatus, ir Jūs, www.pazymos.lt internetinės svetainės (toliau – Svetainė) klientas (toliau – Klientas), toliau kartu vadinami „Šalimis“, o kiekvienas atskirai – „Šalimi“, pagal šias paslaugų pirkimo taisykles (toliau – Taisyklės) sudarė susitarimą:</p><h2>1. Taisyklių objektas</h2><ol><li><strong>1.1.</strong> Mokymo įstaiga įsipareigoja suteikti Klientui pasirinktus privalomuosius mokymus nuotoliniu būdu, išskyrus atvejus, kai mokymų dalis turi būti vykdoma gyvai (pvz., pirmosios pagalbos praktinė dalis).</li><li><strong>1.2.</strong> Klientas patvirtina, kad susipažino su mokymų aprašymu ir sąlygomis prieš atliekant mokėjimą.</li></ol><h2>2. Mokėjimo sąlygos</h2><ol><li><strong>2.1.</strong> Klientas įsipareigoja sumokėti už pasirinktus mokymus pagal Mokymo įstaigos elektroninės prekybos platformoje pateiktas kainas. Į nurodytas kainas įskaičiuoti visi mokesčiai. Kainos Svetainėje, nurodomos eurais.</li><li><strong>2.2.</strong> Mokėjimai pradedami ir atliekami tik gavus mokėjimą. Mokymo medžiaga Klientui pateikiama per virtualią mokymų aplinką „Moodle“ po patvirtinto apmokėjimo.</li><li><strong>2.3.</strong> Visi mokėjimai, susiję su šiomis Taisyklėmis, atliekami tik bankiniais pavedimais į Mokymo įstaigos banko sąskaitą.</li></ol><h2>3. Asmens duomenų apsauga (BDAR)</h2><ol><li><strong>3.1.</strong> Mokymo įstaiga tvarko Kliento asmens duomenis laikydamasis Bendrojo duomenų apsaugos reglamento (BDAR) reikalavimų.</li><li><strong>3.2.</strong> Kliento duomenys renkami ir tvarkomi tik tiek, kiek būtina mokymų organizavimui, pažymėjimų išdavimui bei teisės aktų reikalavimams vykdyti.</li></ol><h2>4. Konfidencialumas</h2><p><strong>4.1.</strong> Šalys įsipareigoja neatskleisti trečiosioms šalims jokios su mokymais susijusios konfidencialios informacijos be išankstinio raštiško kitos Šalies sutikimo, išskyrus įstatymų numatytus atvejus. Šalys susitaria dėl mokymų teikėjo konfidencialios informacijos apsaugos tarp Mokymo įstaigos ir Kliento sudaryto susitarimo galiojimo metu, taip pat pasibaigus minėtam susitarimui.</p><p>4.2. Šalių įsipareigojimai dėl konfidencialios informacijos<p><table><thead><tr><th>Mokymo įstaiga</th><th>Klientas</th></tr></thead><tbody>'
        .'<tr><td><ul><li>Nustato, kokia informacija laikytina konfidencialia (konfidencialios informacijos sąrašas pateikiamas 4.4. papunktyje).</li></ul></td><td><ul><li>Sužino ir naudoja konfidencialią informaciją tik vykdydamas sutartį su Mokymo įstaiga.</li></ul></td></tr>'
        .'<tr><td><ul><li>Gali suteikti rašytinį sutikimą atskleisti konfidencialią informaciją.</li></ul></td><td><ul><li>Be išankstinio raštiško Mokymo įstaigos sutikimo, nenaudoja informacijos savo ar trečiųjų asmenų naudai.</li></ul></td></tr>'
        .'<tr><td><ul><li>Turi būti informuojamas, jei konfidenciali informacija buvo ar gali būti atskleista.</li></ul></td><td><ul><li>Neatskleidžia konfidencialios informacijos kitiems asmenims, išskyrus turinčius teisę ją žinoti.</li></ul></td></tr>'
        .'<tr><td><ul><li>Turi būti informuojamas apie grėsmės konfidencialios informacijos saugumui.</li></ul></td><td><ul><li>Imasi visų reikalingų priemonių, kad išvengtų neteisėto informacijos panaudojimo ar atskleidimo.</li></ul></td></tr>'
        .'<tr><td><ul><li>Gali informuoti kompetentingas institucijas dėl galimų pažeidimų.</li></ul></td><td><ul><li>Privalo informuoti Mokymo įstaigą apie grėsmės informacijos saugumui.</li></ul></td></tr>'
        .'<tr><td><ul><li>Privalo supažindinti Klientą su visais vidaus dokumentais, reglamentuojančiais konfidencialios informacijos apsaugą.</li></ul></td><td><ul><li>Prieš atskleisdamas informaciją kitiems, privalo informuoti juos apie jos konfidencialumą ir pareikalauti apsaugos.</li></ul></td></tr>'
        .'<tr><td></td><td><ul><li>Naudoja konfidencialią informaciją tik pagal sutartį ir teisėtus nurodymus.</li></ul></td></tr>'
        .'<tr><td></td><td><ul><li>Negali naudoti informacijos asmeniniais tikslais be raštiško sutikimo.</li></ul></td></tr>'
        .'<tr><td></td><td><ul><li>Pasibaigus susitarimui, neturi teisės pasilikti ar platinti informacijos kopijų ar nuorodų.</li></ul></td></tr>'
        .'<tr><td></td><td><ul><li>Turi grąžinti visą konfidencialią informaciją per 20 darbo dienų arba iki susitarimo pabaigos.</li></ul></td></tr>'
        .'<tr><td></td><td><ul><li>Užtikrina informacijos slaptumą ne trumpiau kaip 5 metus nuo susitarimo pabaigos.</li></ul></td></tr>'
        .'<tr><td></td><td><ul><li>Atsako už pažeidimus ir privalo atlyginti padarytą žalą.</li></ul></td></tr>'
        .'</tbody></table><p><strong>4.3.</strong> Šalių įsipareigojimai dėl konfidencialios informacijos įsigalioja nuo susitarimo sudarymo momento. Šalys susitaria, kad visi šio susitarimo 4 punkte esantys įsipareigojimai ir susitarimai lieka galioti ir pasibaigus Kliento mokymams pagal susitarimą sudarytą su Mokymo įstaiga.</p><h3>4.4. Mokymo įstaigos konfidencialios informacijos sąrašas</h3>',
    ];
    return view('policy', compact('policy'));
})->name('policy');

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
