@extends('layouts.app')

@section('content')
<x-header />

@php
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

<x-training-description :items="$trainingItems" />

<div class="pt-[60px] md:pt-[100px] bg-gray-100">
    <x-testimonials-section />
</div>

<x-popular-trainings />

<x-faq />

<x-footer />
@endsection