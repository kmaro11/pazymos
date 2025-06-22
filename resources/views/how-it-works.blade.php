@extends('layouts.app')

@section('content')
<x-header />

<section class="bg-gray-100 pt-4 pb-[60px] md:pt-[90px] md:pb-[100px] px-4 md:px-14">
    <div class="max-w-[1200px] mx-auto">
        <h1 class="mb-6 md:mb-[30px] text-black-100 text-center font-['Helvetica_Neue'] text-[40px] md:text-[64px] font-medium leading-[50px] md:leading-[74px]">Apie Pažymos.lt</h1>
        <p class="text-black-100 text-center font-['Helvetica_Neue'] text-base md:text-base font-normal leading-6 md:leading-[24px]">Trumpas aprašymas apie įmonę, kokias paslaugas ji suteikia ir vartotojams kuriamą vertę.</p>
    </div>
</section>

<x-testimonials />
<x-faq />

<x-footer />
@endsection