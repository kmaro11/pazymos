@extends('layouts.app')

@section('content')
<x-header />

<section class="relative py-10 md:py-[200px] flex items-center justify-center px-4 md:px-14">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/404-background.png') }}" alt="Background" class="w-full h-full object-cover">
    </div>
    <div class="relative z-10 max-w-[1200px] mx-auto text-center">
        <h1 class="text-black-100 text-[40px] md:text-[48px] font-medium leading-[50px] md:leading-[58px] mb-4 md:mb-6">404</h1>
        <p class="text-black-100 text-base leading-6 mb-6">Atsiprašome, tačiau puslapis, kurio ieškote, nebuvo rastas.</p>
        <p class="text-black-100 text-base leading-6 mb-12">Tai galėjo nutikti dėl neteisingos nuorodos, pasenusios informacijos arba klaidos rašant adresą.</p>
        <x-button href="/" variant="dark" class="mx-auto">
            Grįžti atgal į Pažymos.lt
        </x-button>
    </div>
</section>

<x-footer />
@endsection


