@extends('layouts.app')

@section('content')
<x-header />
<section class="pt-20 pb-[123px] px-4 md:px-14">
    <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row justify-between gap-10">
        <div class="max-w-[645px] w-full">
            <div class="bg-white py-8 md:pt-8 md:pb-10 rounded-[30px] shadow-large-card">
                <div class="flex items-center mb-10 px-4 md:px-10">
                    <a class="cursor-pointer pr-2.5" aria-label="Grižti į krepšelį">
                        <img src="{{ asset('svg/arrow.svg') }}" alt="arrow">
                    </a>
                    <h2 class="text-2xl font-medium text-black-100">Kontaktiniai duomenys</h2>
                </div>
                <form action="">
                    <div class="flex flex-col gap-4">
                        <div class="px-4 md:px-10 pb-10">
                            <div class="grid grid-cols-2 gap-[30px] ">
                                <x-input name="name" label="Vardas" placeholder="Įveskite savo vardą" />
                                <x-input name="last_name" label="Pavardė" placeholder="Įveskite savo pavardę" />
                            </div>
                            <div class="grid grid-cols-1">
                                <x-input name="email" label="El. paštas" placeholder="Įveskite savo el. pašto adresą" />
                            </div>
                        </div>
                        <div class="py-8 border-t border-b border-black-100/10 px-4 md:px-10">
                            <h3 class="text-2xl font-medium text-black-100 mb-6">Mokėjimo būdas</h3>
                            <div class="space-y-4">
                                <label class="relative flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" class="sr-only peer">
                                    <span class="w-[30px] h-[30px] mr-4 rounded-full border-2 border-green/40 peer-checked:border-green block transition-colors">
                                    </span>
                                    <span class="absolute left-[5px] top-[5px] w-5 h-5 rounded-full bg-white peer-checked:bg-green block transition-colors"></span>
                                    <span class="text-base font-normal leading-6 text-black-100">Paysera</span>
                                </label>
                                <label class="relative flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" class="sr-only peer">
                                    <span class="w-[30px] h-[30px] mr-4 rounded-full border-2 border-green/40 peer-checked:border-green block transition-colors">
                                    </span>
                                    <span class="absolute left-[5px] top-[5px] w-5 h-5 rounded-full bg-white peer-checked:bg-green block transition-colors"></span>
                                    <span class="text-base font-normal leading-6 text-black-100">El. Bankininkystė</span>
                                </label>
                                <label class="relative flex items-center cursor-pointer">
                                    <input type="radio" name="payment_method" class="sr-only peer" checked>
                                    <span class="w-[30px] h-[30px] mr-4 rounded-full border-2 border-green/40 peer-checked:border-green block transition-colors">
                                    </span>
                                    <span class="absolute left-[5px] top-[5px] w-5 h-5 rounded-full bg-white peer-checked:bg-green block transition-colors"></span>
                                    <span class="text-base font-normal leading-6 text-black-100">Banko kortelė</span>
                                </label>

                            </div>
                        </div>
                        <div class="px-4 md:px-10">
                            Pridesiu veliau, kai bus aisku su paymentais.
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="max-w-[645px] w-full">
            <x-basket-calculation />
        </div>
    </div>
</section>
<x-footer />
@endsection