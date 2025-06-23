@extends('layouts.app')

@section('content')
<section class="pt-20 pb-[100px] px-4 md:px-14">
    <div class="max-w-[1320px] mx-auto flex flex-col md:flex-row gap-x-10">
        <div class="max-w-[500px]">
            <h1 class="mb-6 text-black-100  text-[48px] font-normal font-medium leading-[58px]">Susisiekite su mumis</h1>
            <p class="mb-9 text-black-100  text-base font-normal leading-6">Mūsų komanda mielai jums padės.</p>
            <div class="flex flex-wrap gap-3">
                <a href="mailto:labas@pazymos.lt" class="bg-green-200 flex items-center gap-x-2 rounded-[100px] py-3 px-4 text-black-100 text-center  text-base font-medium leading-6">
                    <img src="{{ asset('svg/envelope.svg') }}" alt="Email">
                    <span>
                        labas@pazymos.lt
                    </span>
                </a>
                <a href="tel:+370 000 0000" class="bg-green-100 flex items-center gap-x-2 rounded-[100px] py-3 px-4 text-black-100 text-center  text-base font-medium leading-6">
                    <img src="{{ asset('svg/phone.svg') }}" alt="Phone">
                    <span>
                        +370 000 0000
                    </span>
                </a>
                <a class="bg-blue flex items-center gap-x-2 rounded-[100px] py-3 px-4 text-black-100 text-center  text-base font-medium leading-6">
                    <img src="{{ asset('svg/map.svg') }}" alt="Map">
                    <span>
                        Saulėtekio al. 17, LT-10224 Vilnius
                    </span>
                </a>
            </div>
        </div>
        <div class="max-w-[645px] w-full"></div>
    </div>
</section>
@endsection