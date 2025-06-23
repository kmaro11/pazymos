@extends('layouts.app')

@section('content')
@php
$members = [
[
'name' => 'Vardas Pavardė',
'role' => 'Rolė',
'image' => 'https://picsum.photos/400/400?random=' . rand(),
'linkedin' => '#',
],
[
'name' => 'Vardas Pavardė',
'role' => 'Rolė',
'image' => 'https://picsum.photos/400/400?random=' . rand(),
'linkedin' => '#',
],
[
'name' => 'Vardas Pavardė',
'role' => 'Rolė',
'image' => 'https://picsum.photos/400/400?random=' . rand(),
'linkedin' => '#',
],
[
'name' => 'Vardas Pavardė',
'role' => 'Rolė',
'image' => 'https://picsum.photos/400/400?random=' . rand(),
'linkedin' => '#',
],
[
'name' => 'Vardas Pavardė',
'role' => 'Rolė',
'image' => 'https://picsum.photos/400/400?random=' . rand(),
'linkedin' => '#',
],
[
'name' => 'Vardas Pavardė',
'role' => 'Rolė',
'image' => 'https://picsum.photos/400/400?random=' . rand(),
'linkedin' => '#',
],
];
@endphp

<x-header />

<section class="bg-gray-100 pt-4 pb-[60px] md:pt-[90px] md:pb-20">
    <div class="px-4 md:px-14">
        <div class="max-w-[1200px] mx-auto">
            <div class="mb-[60px] md:mb-[100px]">
                <h1 class="mb-6 md:mb-[30px] text-black-100 text-center  text-[40px] md:text-[64px] font-medium leading-[50px] md:leading-[74px]">Apie Pažymos.lt</h1>
                <p class="text-black-100 text-center  text-base md:text-base font-normal leading-6 md:leading-[24px]">Trumpas aprašymas apie įmonę, kokias paslaugas ji suteikia ir vartotojams kuriamą vertę.</p>
            </div>
        </div>
    </div>
    <div class="relative max-w-[1400px] px-5 mx-auto">
        <img src="{{ asset('images/about-hero.jpg') }}" alt="Apie Pažymos.lt" class="w-full h-full hidden md:block">
        <img src="{{ asset('images/about-hero-mobile.jpg') }}" alt="Apie Pažymos.lt" class="w-full h-full md:hidden">
    </div>
    <div class="px-4 md:px-14 pt-[60px] md:pt-[100px]">
        <div class="max-w-[1200px] mx-auto flex flex-col md:flex-row gap-x-10 justify-between">
            <h2 class="text-black-100 md:text-black-100  text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] mb-6 md:mb-0">Kaip viskas prasidėjo</h2>
            <div class="max-w-[644px] space-y-6 w-full">
                <p class="text-black-100  text-base font-normal leading-6">Cras a morbi id duis volutpat porta hendrerit ultrices. In sit blandit nunc lacus ipsum est eget proin in. Nunc fringilla cras quis imperdiet in urna enim erat. Diam nullam amet suspendisse elit ultricies tincidunt. Cras a morbi id duis volutpat porta hendrerit ultrices. In sit blandit nunc lacus ipsum est eget proin in. Nunc fringilla cras quis imperdiet in urna enim erat. Diam nullam amet suspendisse elit ultricies tincidunt.
                </p>
                <p class="text-black-100  text-base font-normal leading-6">Diam sapien ut arcu tortor erat sed eu cras. Quam eu diam fermentum at. Magna a eget pellentesque tristique est volutpat. Augue turpis pellentesque in tortor porttitor risus scelerisque.</p>
            </div>
        </div>
    </div>
</section>

<x-statistics />

<x-how-it-works
    title="Įmonės vertybės"
    description="Vivamus posuere felis justo ut. Ut fames in quis pulvinar arcu tempor."
    :items=" [
    [ 'title'=> 'Inovatyvumas ir aukšta mokymų kokybė',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.',
    'icon' => 'bulb.svg',
    ],
    [
    'title' => 'Kliento pasitenkinimas',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.',
    'icon' => 'face.svg',
    ],
    [
    'title' => 'Orientacija į rinkos poreikį kuriant programas',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.',
    'icon' => 'crown.svg',
    ],
    ]" />

<section class="bg-gray-100">
    <div class="bg-green pt-[60px] md:pt-20 pb-[68px] md:pb-[85px] rounded-[30px] px-4 md:px-14">
        <div class="max-w-[1320px] mx-auto">
            <div class="max-w-[530px] mx-auto px-4 mb-14 md:mb-[85px]">
                <h2 class="text-white md:text-gray-100 text-center  text-[32px] md:text-[48px] font-medium leading-[42px] md:leading-[58px] mb-4 md:mb-6">Mūsų komanda</h2>
                <p class="text-white md:text-gray-100 text-center  text-base md:text-base font-normal leading-6 md:leading-6">Tincidunt proin fringilla pulvinar ut aliquam diam gravida proin. Feugiat magna vulputate faucibus risus adipiscing.</p>
            </div>

            <div class="px-4 md:px-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-10 md:gap-y-12">
                    @foreach ($members as $member)
                    <div>
                        <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}"
                            class="w-full h-auto object-cover rounded-2xl mb-5">
                        <div class="flex justify-between items-start px-2">
                            <div>
                                <h3 class="text-gray-100  text-[20px] font-medium leading-[30px] mb-2">{{ $member['name'] }}</h3>
                                <p class="text-gray-100  text-base font-light leading-6">{{ $member['role'] }}</p>
                            </div>
                            <a href="{{ $member['linkedin'] }}" target="_blank" class="text-white">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.66667 4C4.74619 4 4 4.74619 4 5.66667V22.3333C4 23.2538 4.74619 24 5.66667 24H22.3333C23.2538 24 24 23.2538 24 22.3333V5.66667C24 4.74619 23.2538 4 22.3333 4H5.66667ZM10.1342 8.44747C10.1404 9.50997 9.34512 10.1647 8.40137 10.16C7.5123 10.1553 6.7373 9.44747 6.74199 8.44903C6.74668 7.50997 7.48887 6.75528 8.45293 6.77716C9.43106 6.79903 10.1404 7.51622 10.1342 8.44747ZM14.3108 11.5131H11.5108H11.5092V21.024H14.4686V20.8021C14.4686 20.38 14.4682 19.9578 14.4679 19.5354C14.467 18.409 14.466 17.2813 14.4718 16.1552C14.4733 15.8818 14.4858 15.5974 14.5561 15.3364C14.8201 14.3614 15.6968 13.7318 16.6749 13.8866C17.303 13.9849 17.7186 14.349 17.8936 14.9412C18.0014 15.3114 18.0499 15.7099 18.0546 16.0959C18.0672 17.2599 18.0654 18.4239 18.0637 19.588C18.063 19.9989 18.0623 20.41 18.0623 20.8209V21.0224H21.0311V20.7943C21.0311 20.2921 21.0309 19.79 21.0306 19.2879C21.03 18.0329 21.0293 16.7779 21.0327 15.5224C21.0342 14.9552 20.9733 14.3959 20.8342 13.8474C20.6264 13.0318 20.1968 12.3568 19.4983 11.8693C19.003 11.5224 18.4592 11.299 17.8514 11.274C17.7822 11.2711 17.7124 11.2674 17.6423 11.2636C17.3316 11.2468 17.0157 11.2297 16.7186 11.2896C15.8686 11.4599 15.1218 11.849 14.5577 12.5349C14.4921 12.6136 14.428 12.6934 14.3323 12.8127L14.3108 12.8397V11.5131ZM6.9796 21.0271H9.92491V11.5193H6.9796V21.0271Z" fill="#FDFCFA" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<x-latest-articles />
<x-footer />
@endsection