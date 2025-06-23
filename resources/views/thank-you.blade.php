@extends('layouts.app')

@section('content')
<x-header />
<section class="pt-[194px] pb-[200px] px-4 md:px-14">
    <h1 class="mb-6 text-black-100 text-center text-[48px] font-medium leading-[58px]">
        Dėkojame už pirkimą!
    </h1>
    <p class="mb-6 text-black-100 text-center text-base font-normal leading-6">
        Netrukus į nurodytą el. paštą gausite pirkimo patvirtinimo laišką su įsigytais mokymais.
    </p>
    <p class="mb-12 text-black-100 text-center text-base font-normal leading-6">
        Laiške taip pat gausite instrukcijas ir prisijungimus prie Moodle sistemos, per kurią vyks mokymai.
    </p>
    <x-button href="/" variant="dark" class="mx-auto">
        Prisijungti prie Moodle
    </x-button>
</section>
<x-footer />
@endsection