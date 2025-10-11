@extends('layouts.app')

@section('content')
<x-header />

@php
$breadcrumbsData = [
'breadcrumbs' => [
['url' => '/visi-mokymai', 'label' => 'Visi mokymai'],
['url' => '/pirmosios-pagalbos', 'label' => 'Pirmosios Pagalbos privalomieji mokymai'],
['url' => '#', 'label' => 'Higienos pažymėjimas su nuodingomis medžiagomis dirbandys darbuotojai'],
],
'title' => 'Higienos pažymėjimas su nuodingomis medžiagomis dirbandys darbuotojai',
];

$heroData = [
'avatar' => 'https://i.pravatar.cc/150?img=52',
'title' => 'Higienos pažymėjimas su nuodingomis medžiagomis dirbandys darbuotojai',
'descriptions' => [
'Tortor malesuada morbi nunc id nulla vel. Vitae phasellus ut urna justo orci semper mauris. Et tempor pulvinar eu amet tellus pellentesque. Purus ipsum facilisis odio nibh. Lorem aliquet ultrices viverra facilisi. Suspendisse sit est porttitor lectus. Commodo massa eget dignissim tincidunt pretium parturient habitant ipsum. Purus ipsum facilisis odio nibh. Lorem aliquet ultrices viverra facilisi. Suspendisse sit est porttitor lectus. Commodo massa eget dignissim tincidunt pretium parturient habitant ipsum.',
'In id malesuada orci aliquam vitae. Odio eget sit tincidunt hendrerit purus. Ipsum augue duis molestie facilisi augue.'
]
];

$trainingSections = [
[
    'icon' => 'list-icon.svg',
    'title' => 'Kursų temos',
    'html' => '<p>H10 kursai apima visas pagrindines higienos ir maisto saugos temas, kurias būtina žinoti kiekvienam, dirbančiam su maistu.</p><p>Kursų metu gilinamas<i>i</i> į šiuos aspektus:</p><ul><li>asmens higiena ir sveikatos svarba dirbant su maistu;</li><li>maisto užteršimo rizikos ir jų prevencija;</li><li>kryžminės taršos pavojai ir valdymas;</li><li>tinkamas produktų laikymas, temperatūros kontrolė;</li><li>valymo ir dezinfekcijos pagrindai;</li><li>kenkėjų kontrolė ir higienos praktikos;</li><li>pirmieji veiksmai, nustačius maisto netinkamumą vartoti;</li><li>atsakomybė už maisto saugą – darbuotojo vaidmuo.</li></ul>'
],
[
    'icon' => 'principle-icon.svg',
    'title' => 'Kaip pasiruošti H10 higienos pažymėjimo testui?',
    'html' => '<p>Norint gauti H10 higienos pažymėjimą, būtina sėkmingai išlaikyti testą – teorinis žinių patikrinimas vyksta nuotoliniu būdu. Testas parengtas taip, kad atspindėtų realias situacijas maisto tvarkymo procese, todėl svarbu ne tik išmokti taisykles, bet ir suprasti jų taikymą praktikoje.</p><p>Mūsų patarimai, kaip efektyviai pasiruošti testui:</p><ul><li>atidžiai išstudijuokite visas kursų temas ir supraskite, kodėl jos svarbios;</li><li>atkreipkite dėmesį į dažniausiai pasikartojančias situacijas (pvz., užteršto maisto požymiai, temperatūros laikymo normos);</li><li>peržiūrėkite vaizdo medžiagą – vaizdiniai pavyzdžiai padeda geriau įsisavinti informaciją.</li></ul>'
],
[
    'icon' => 'certificate-icon.svg',
    'title' => 'Kodėl verta rinktis Pažymos.lt?',
    'html' => '<p>Pazymos.lt – tai ne tik vieta, kur galite greitai ir patogiai gauti reikalingą pažymėjimą. Tai visapusiškas sprendimas tiems, kurie nori mokytis šiuolaikiškai.</p><p>Mūsų mokymai sukurti taip, kad svarbiausias žinias lengvai įsisavintų kiekvienas. Aukštos kokybės mokymo medžiaga, paruošta savo srities profesionalų, aiški struktūra, vizualinė medžiaga ir reali praktika leidžia ne tik išlaikyti testą, bet ir jaustis pasiruošusiems padėti realiose situacijose.</p><p>Čia rasite ne tik H10 higienos kursus dirbantiems su maistu. Iš viso siūlome net 27 privalomuosius nuotolinius ir dalinai nuotolinius (hibridinius) mokymus, kurie apima svarbias saugos ir sveikatos apsaugos sritis, tokias kaip pirmoji pagalba, civilinė sauga, priešgaisrinė sauga, taip pat kitus higienos mokymus (HB, HBB, H4, H5, H7, H11, H12, H13).</p>'
]
];

$trainingInfo = [
    'title' => 'Kam skirta',
    'description' => 'H10 pažymėjimas yra privalomas darbuotojams, tiesiogiai dirbantiems su maistu įvairiose srityse – nuo viešojo maitinimo iki maisto gamybos ar pardavimo.',
    'items' => [
        [ 'title' => 'Kurso kodas:', 'name' => 'H10' ],
        [ 'title' => 'Kurso trukmė:', 'name' => '6 ak. val.' ],
        [ 'title' => 'Kurso formatas:', 'name' => 'Nuotolinis', 'info' => '(Kursas/testas atliekami internetu)' ],
        [ 'title' => 'Pažymėjimas:', 'name' => 'Išduodamas', 'info' => '(Išlaikius teorijos testą)' ],
        [ 'title' => 'Galiojimo trukmė:', 'name' => '5 metai' ],
        [ 'title' => 'Teorijos prieiga:', 'name' => '30 kalendorinių dienų', 'info' => '(Nuo kurso įsigijimo)' ],
    ],
];
@endphp

<x-internal-hero
    :avatar="$heroData['avatar']"
    :title="$heroData['title']"
    :descriptions="$heroData['descriptions']"
    :breadcrumbs="[
        ['url' => '/', 'label' => 'Visi mokymai'],
        ['url' => '/trainings', 'label' => 'Pirmosios Pagalbos privalomieji mokymai'],
        ['url' => '/trainings/category', 'label' => 'Higienos pažymėjimas su nuodingomis medžiagomis dirbandys darbuotojai']
    ]" 
    :sections="$trainingSections"
    :trainingInfo="$trainingInfo"
    />



<x-course-complect />

<div class="pt-[60px] md:pt-[100px] bg-gray-100">
    <x-testimonials-section />
</div>

<x-popular-trainings />

<x-faq />

<x-footer />
@endsection