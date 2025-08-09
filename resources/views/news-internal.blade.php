@extends('layouts.app')

@section('content')
<x-header />
<!-- TODO: NEED MOBILE -->
<article class="pt-4 md:pt-14 pb-[100px] px-4 md:px-14">
    <div class="max-w-[1440px] mx-auto">
        <div class=" text-[14px] font-medium leading-[22px] text-green mb-4 py-[5px] px-3 rounded-[10px] bg-gray-300 w-max">
            {{ $article['category'] }}
        </div>
        <div class="flex justify-between mb-[60px]">
            <div class="max-w-[870px] w-full">
                <h1 class="text-[48px] font-bold leading-[56px] tracking-[-1.68px] mb-4 font-['Plus_Jakarta_Sans'] text-[#1F2632]">{{ $article['title'] }}</h1>
                <p class="text-base font-normal leading-6  text-black-100">{{ $article['excerpt'] }}</p>
            </div>
            <div class="flex-shrink-0">
                <div class="text-black  text-sm font-normal leading-[22px] mb-3">Dalintis šiuo įrašu</div>
                <div class="flex items-center gap-x-2">
                    <a href="#" target="_blank" class="bg-white rounded-full p-2 shadow-circle h-10 w-10 flex items-center justify-center">
                        <img src="{{ asset('svg/share.svg') }}" alt="Link">
                    </a>
                    <a href="#" target="_blank" class="bg-white rounded-full p-2 shadow-circle h-10 w-10 flex items-center justify-center">
                        <img src="{{ asset('svg/facebook.svg') }}" alt="Facebook">
                    </a>
                    <a href="#" target="_blank" class="bg-white rounded-full p-2 shadow-circle h-10 w-10 flex items-center justify-center">
                        <img src="{{ asset('svg/linkedin.svg') }}" alt="LinkedIn">
                    </a>
                    <a href="#" target="_blank" class="bg-white rounded-full p-2 shadow-circle h-10 w-10 flex items-center justify-center">
                        <img src="{{ asset('svg/x.svg') }}" alt="X">
                    </a>
                </div>
            </div>
        </div>
        <div class="relative w-full h-[370px] mb-[60px]">
            <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover rounded-[16px] object-center">
        </div>
        <div class="news-article prose lg:prose-xl max-w-[870px] mx-auto">
            {!! $article['content'] !!}
        </div>
    </div>
</article>

<x-latest-articles title="Susiję straipsniai" />

<x-footer />
@endsection