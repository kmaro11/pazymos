@extends('layouts.app')

@section('content')
<x-header />
<section class="pt-4 lg:pt-14 pb-[100px] px-4 md:px-14">
    <div class="max-w-[1440px] mx-auto flex flex-col lg:flex-row gap-10 justify-between">
        <div class="max-w-[500px]">
            <h1 class="mb-6 text-black-100 text-[40px] md:text-[48px] font-normal font-medium leading-[50px] md:leading-[58px] max-w-[300px] md:max-w-none">Susisiekite su mumis</h1>
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
            <div class="w-full rounded-[30px] overflow-hidden mt-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.157813754172!2d25.33918447690661!3d54.724438870726004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e64575d09f%3A0xdb07929194bcaab3!2sSaul%C4%97tekio%20al.%2017%2C%20Vilnius%2C%2010221%20Vilniaus%20m.%20sav.!5e0!3m2!1sen!2slt!4v1764191534637!5m2!1sen!2slt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="max-w-[645px] w-full px-4 py-8 md:p-10 pt-8 rounded-[30px] bg-white shadow-large-card">
            <h2 class="text-black-100 text-2xl font-medium leading-normal mb-4">Užpildykite šią formą.</h2>
            <p class="text-black-100 text-base font-normal leading-6 mb-9">Mūsų komanda su jumis susisieks per 24 val.</p>
            <form action="">
                <div class="grid grid-cols-1 gap-y-4 mb-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-[30px]">
                        <x-input name="name" label="Vardas" placeholder="Vardas" required />
                        <x-input name="name" label="Pavardė" placeholder="Pavardė" required />
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-[30px]">
                        <x-input name="email" type="email" label="El. paštas" placeholder="El. paštas" required />
                        <x-input name="phone" type="tel" label="Telefonas" placeholder="Telefonas" required />
                    </div>
                    <x-select
                        name="topic"
                        label="Pasirinkite temą"
                        placeholder="Pasirinkite temą"
                        :options="[
                            ['value' => 'general', 'label' => 'Bendrinis klausimas'],
                            ['value' => 'support', 'label' => 'Pagalba'],
                            ['value' => 'sales', 'label' => 'Pardavimai'],
                            ['value' => 'feedback', 'label' => 'Atsiliepimas'],
                        ]" />
                    <x-input as="textarea" name="message" label="Jūsų žinutė" placeholder="Parašykite savo pranešimą čia..." rows="5" />
                </div>
                <div class="mb-10">
                    Siųsdami užklausą sutinkate su mūsų <a href="{{ route('privacy') }}">Taisyklėmis</a>.
                </div>
                <x-button type="submit" variant="dark" size="w-full">
                    Siųsti užklausą
                </x-button>
            </form>
        </div>
    </div>
</section>
<x-footer />
@endsection