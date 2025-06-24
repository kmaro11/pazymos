@extends('layouts.app')

@section('content')
<x-header />
<!-- TODO: update top paddings when header will be done -->
<section class="pt-4 md:pt-14 pb-12 md:pb-[85px]">
    <div class="max-w-[1440px] mx-auto">
        <h1 class="max-w-[700px] w-full mx-auto mb-6 md:mb-[30px] text-black-100 text-center  text-[40px] md:text-[64px] font-normal font-medium leading-[50px] md:leading-[74px]">
            Higienos privalomieji mokymai
        </h1>
        <p class="text-black-100 text-center  text-base font-normal leading-6 md:text-base md:leading-6">
            Cras a morbi id duis volutpat porta hendrerit ultrices. In sit blandit nunc lacus ipsum est eget proin in.
        </p>
    </div>
</section>

<x-popular-courses />

<div class="pt-[60px] md:pt-[100px] bg-gray-100">
    <x-testimonials-section />
</div>

<x-faq />

<x-footer />
@endsection