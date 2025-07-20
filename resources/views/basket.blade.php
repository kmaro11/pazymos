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
        </div>
    </div>
</section>
<x-footer />
@endsection