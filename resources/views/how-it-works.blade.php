@extends('layouts.app')

@section('content')
<x-header />

<section class="bg-gray-100 pt-4 pb-[60px] md:pt-[90px] md:pb-[100px] px-4 md:px-14">
    <div class="max-w-[1200px] mx-auto">
        <h1 class="mb-6 md:mb-[30px] text-black-100 text-center  text-[40px] md:text-[64px] font-medium leading-[50px] md:leading-[74px]">Apie Pažymos.lt</h1>
        <p class="text-black-100 text-center  text-base md:text-base font-normal leading-6 md:leading-[24px]">Trumpas aprašymas apie įmonę, kokias paslaugas ji suteikia ir vartotojams kuriamą vertę.</p>
    </div>
</section>

<x-process-steps />

<x-testimonials />
<x-faq />

<x-footer>
    <div class="relative pt-12 pb-16 md:py-14 px-8 md:px-16 rounded-[30px] relative overflow-hidden mb-[60px] md:mb-[110px]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/green-bg.jpg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="max-w-[605px] w-full">
                <h2 class="text-black-100  text-[28px] md:text-[36px] font-medium leading-[38px] md:leading-[46px] mb-6 md:mb-4 text-center md:text-left">Pavadinimas, skatinantis įsigyti mokymus</h2>
                <p class="text-[#002B3F]  text-base font-normal leading-6 text-center md:text-left">Viverra in sit leo sed nibh. Vel molestie bibendum porta penatibus eu odio magnis.</p>
            </div>
            <x-button variant="dark">
                Rinktis mokymus
            </x-button>
        </div>
    </div>
</x-footer>
@endsection