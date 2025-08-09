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

$trainingItems = [
[
'icon' => 'list-icon.svg',
'title' => 'Kursų temos',
'description' => 'Cras elementum et consequat eget aliquet id velit etiam. Sed convallis varius risus donec amet. Nulla eu fermentum consectetur eget in non ultrices sapien. Tortor lacus turpis tellus diam. Condimentum cras curabitur dignissim eu velit.'
],
[
'icon' => 'principle-icon.svg',
'title' => 'Mokymosi principas',
'description' => 'Eu turpis vel nec dis. Tincidunt velit eu faucibus diam ac urna lorem augue et. Penatibus enim placerat sed scelerisque ipsum hendrerit risus odio. Massa enim elementum eu ornare aliquet eget donec scelerisque. Velit sit netus tincidunt turpis vitae a.'
],
[
'icon' => 'certificate-icon.svg',
'title' => 'Sertifikato informacija',
'description' => 'Nunc id fames congue tincidunt morbi feugiat ut. Nibh consectetur nam tempor et bibendum et consectetur elit urna. Eget proin sagittis et amet. Turpis at porttitor sed tincidunt sed. Maecenas sollicitudin tempor odio ac adipiscing quam suspendisse at.'
]
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
    ]" />

<x-training-description :items="$trainingItems" />

<x-course-complect />

<!-- For now we hide this section -->
<!-- <div class="pt-[60px] md:pt-[100px] bg-gray-100">
    <x-testimonials-section />
</div> -->

<x-popular-trainings />

<x-faq />

<x-footer />
@endsection