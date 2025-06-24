@extends('layouts.app')

@section('content')
<x-header />

<section class="bg-gray-100 pt-4 pb-[60px] md:pt-14 md:pb-[100px] px-4 md:px-14">
    <div class="max-w-[1200px] mx-auto">
        <h1 class="mb-6 md:mb-[30px] text-black-100 text-center  text-[40px] md:text-[64px] font-medium leading-[50px] md:leading-[74px]">Naujienos</h1>
        <p class="text-black-100 text-center  text-base md:text-base font-normal leading-6 md:leading-[24px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</section>

<x-news-list />
<x-footer />
@endsection