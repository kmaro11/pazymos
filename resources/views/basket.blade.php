@extends('layouts.app')

@section('content')
<x-header />
<section class="pt-4 lg:pt-14 pb-[127px] px-4 md:px-14">
    <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row justify-between gap-10">
        <div class="max-w-[645px] w-full">
            <div class="bg-white px-4 py-8 md:pt-8 md:p-10 rounded-[30px] shadow-large-card">
                <h2 class="text-2xl font-medium text-black-100 mb-10">Krepšelio skaičiavimas</h2>
                <div id="basket-container">
                    <!-- JavaScript will render basket items here -->
                </div>
                <x-button variant="dark" size="w-full" class="mt-9 hidden" url="{{ route('payment') }}" id="payment-button">Eiti į apmokėjimą</x-button>
            </div>
        </div>
        <div class="max-w-[645px] w-full">
            <x-basket-calculation />
            <div class="mt-10 py-8 px-4 md:pl-[34px] md:pr-[45px] mt-9 bg-white rounded-[30px] shadow-large-card">
                <h3 class="mb-8 text-lg font-medium text-black-100 leading-6">
                    Svarbi informacija prieš ir po apmokėjimo
                </h3>
                <div class="space-y-4">
                    <p class="text-black-100/50 text-base font-normal leading-6">
                        Sėkmingai atlikus apmokėjimą, per kelias minutes el. paštu gausite patvirtinimo laišką su visais tolimesniais žingsniais. Laiške rasite prisijungimo prie nuotolinių mokymų informaciją, aiškias instrukcijas, mokymų eigą, informaciją apie testą (jei taikoma) bei paaiškinimą, kaip ir kada bus išduodamas pažymėjimas, taip pat mokėjimo patvirtinimą.
                    </p>
                    <p class="text-black-100/50 text-base font-normal leading-6">
                        Jeigu per kelias minutes laiško negausite, patikrinkite „Šlamšto (Spam)“ aplanką. Kilus klausimams, neaiškumams ar techniniams nesklandumams, Pažymos.lt komanda visada pasiruošusi Jums padėti ir suteikti reikiamą informaciją – drąsiai susisiekite su mumis paštu - info@pazymos.lt arba telefonu - 065744385.
                    </p>
                    <p class="text-black-100/50 text-base font-normal leading-6">
                        Jeigu turite galiojantį nuolaidos kodą, įveskite jį į laukelį „Nuolaidos kodas“ ir paspauskite „Taikyti“ prieš atlikdami apmokėjimą. Sėkmingai pritaikius nuolaidą, galutinė mokėtina suma bus perskaičiuota automatiškai.
                    </p>
            </div>
        </div>
    </div>
</section>
<x-footer />
@endsection